<?php 
class ModelExtensionModuleSoProductBundles extends Model {

    public function cleanTheArray($data = array()) {
        if (!isset($data['name'])) $data['name'] = array();
        if (!isset($data['description'])) $data['description'] = array();
        if (!isset($data['image'])) $data['image'] = '';
        if (!isset($data['slug'])) $data['slug'] = '';
        if (!isset($data['status'])) $data['status'] = '1';
        if (!isset($data['discount_type'])) $data['discount_type'] = '1';
        if (!isset($data['discount_value'])) $data['discount_value'] = '0';
        if (!isset($data['sort_order'])) $data['sort_order'] = '0';
        if (!isset($data['products'])) $data['products'] = array();
        if (!isset($data['products_show'])) $data['products_show'] = array();
        if (!isset($data['categories_show'])) $data['categories_show'] = array();
        if (!isset($data['date_available'])) $data['date_available'] = date('Y-m-d');
        
        return $data;
    }
    
    public function getBundle($bundle_id = 0) {
        $query = "SELECT * FROM `" . DB_PREFIX . "so_product_bundles` WHERE 
            `id`='".$this->db->escape($bundle_id)."' 
            AND `store_id`='" . $this->config->get('config_store_id') . "'
            AND `status`= '1' 
            AND `date_available` <= NOW()
            LIMIT 1";
        
        $query = $this->db->query($query);
        
        if ($query->num_rows) {
            return $this->filterBundles(array(0 => $query->row));
        } else {
            return false;
        }
		
    }
    
    public function filterBundles($results = array()) {
        $this->load->model('catalog/product');
        
        foreach ($results as $index => $result) {
            $products = json_decode($result['products'], true);
            
            $res = $this->db->query("SELECT count(*) as total from " . DB_PREFIX . "product WHERE product_id IN (" . implode(",", $products) . ") AND status = '1' AND quantity > '0'");
            if (!$res->row['total'] || $res->row['total'] != count(array_unique($products))) {
                    unset($results[$index]);
                    $unset = true;
            } else {
                $results[$index]['products'] = $products;
                $results[$index]['name'] = json_decode($result['name'], true);
                $results[$index]['description'] = json_decode($result['description'], true);
            }
        }

        return $results;
    }
    

    public function getBundles($data = array()) {
        
        $query = "SELECT * FROM `" . DB_PREFIX . "so_product_bundles` WHERE 
            `store_id`='" . $this->config->get('config_store_id') . "' 
            AND `products` != ''
            AND `status`= '1' 
            AND `date_available` <= NOW()
        ";
        
        if (!empty($data['product_id'])) {
            $query .= ' AND `products_show` LIKE \'%"' . $data['product_id'] . '"%\'';
        }
        
        if (!empty($data['category_id'])) {
            $query .= ' AND `categories_show` LIKE \'%"' . $data['category_id'] . '"%\'';
        }
        
        if (!empty($data['order'])) {
            if ($data['order'] == 'random') {
                $query .= " ORDER BY RAND()";
            }
        } else {
           $query .= " ORDER BY `sort_order` ASC"; 
        }
        
        
        if (!empty($data['limit'])) {
            $data['start'] = $data['limit'] * ($data['page']-1);

            $query .= " LIMIT " . $data['start'] . ", " . $data['limit'];
        }
        
        $query = $this->db->query($query);

        if ($query->num_rows) {
            return $this->filterBundles($query->rows);
        } else {
            return array();
        }
        
    }
    
    public function getTotalBundles($data = array()) {
        $query = "SELECT * FROM `" . DB_PREFIX . "so_product_bundles` WHERE 
            `store_id`='" . $this->config->get('config_store_id') . "' 
            AND `products` != ''
            AND `status`= '1' 
            AND `date_available` <= NOW()
        ";
        
        if (!empty($data['product_id'])) {
            $query .= ' AND `products_show` LIKE \'%"' . $data['product_id'] . '"%\'';
        }
        
        if (!empty($data['category_id'])) {
            $query .= ' AND `categories_show` LIKE \'%"' . $data['category_id'] . '"%\'';
        }
        
        if (!empty($data['order'])) {
            if ($data['order'] == 'random') {
                $query .= " ORDER BY RAND()";
            }
        } else {
           $query .= " ORDER BY `sort_order` ASC"; 
        }

        $query = $this->db->query($query);

        if ($query->num_rows) {
            return count($this->filterBundles($query->rows));
        } else {
            return 0;
        }
    }

    /**
     * @param int    $bundle_id
     * @param string $key       view, addcart, order
     * @param array  $data
     */
    public function addActivity($bundle_id, $key = 'view', $data = array()) {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "so_product_bundles_activity` SET
            `bundle_id` = '" . (int)$bundle_id . "',
            `key` = '" . $this->db->escape($key) . "',
            `data` = '" . $this->db->escape(json_encode($data)) . "',
            `store_id` = '" . (int)$this->config->get('config_store_id') . "',
            `ip` = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "',
            `date_added` = NOW()"
        );
    }
}
