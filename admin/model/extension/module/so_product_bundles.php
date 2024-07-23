<?php 
class ModelExtensionModuleSoProductBundles extends Model {

  	public function install() {
		// Noting here for now
  	} 
  
  	public function uninstall() {
		// Nothing here for now
  	}
    
    // Database initializations
    public function initDb() {
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "so_product_bundles` (
            `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
            `name` text NOT NULL,
            `description` text NOT NULL,
            `image` varchar(255) NOT NULL DEFAULT '',
            `slug` text NOT NULL,
            `status` tinyint(1) NOT NULL DEFAULT '1',
            `discount_type` tinyint(10) NOT NULL DEFAULT '1',
            `discount_value` decimal(15,2),
            `sort_order` int(11) NOT NULL DEFAULT '0',
            `products` text NOT NULL,
            `products_show` text NOT NULL,
            `categories_show` text NOT NULL,
            `customer_group` text NOT NULL,
            `store_id` int(11) UNSIGNED NOT NULL,
            `date_available` datetime NOT NULL,
            `date_added` datetime NOT NULL,
            `date_modified` datetime NOT NULL,
            PRIMARY KEY (`id`)
        )");

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "so_product_bundles_activity` (
            `activity_id` INT(11) NOT NULL AUTO_INCREMENT,
            `bundle_id` INT(11) NOT NULL,
            `key` VARCHAR(64) NOT NULL,
            `data` TEXT NOT NULL,
            `store_id` INT(11) NOT NULL DEFAULT '0',
            `ip` VARCHAR(40) NOT NULL,
            `date_added` DATETIME NOT NULL,
            PRIMARY KEY (`activity_id`)
        )");
    }
    
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
        if (!isset($data['customer_group'])) $data['customer_group'] = array();
        if (!isset($data['store_id'])) $data['store_id'] = 0;
        if (!isset($data['date_available'])) $data['date_available'] = date('Y-m-d');
        
        return $data;
    }
    
    public function addBundle($data = array(), $return_id = false) {
        
        $data = $this->cleanTheArray($data);
        
        $query = $this->db->query("INSERT INTO `" . DB_PREFIX . "so_product_bundles` SET 
            `name` = '" . $this->db->escape(json_encode($data['name'])) . "',
            `description` = '" . $this->db->escape(json_encode($data['description'])) . "',
            `image` = '" . $this->db->escape($data['image']) . "',
            `slug` =  '" . $this->db->escape($data['slug']) . "',
            `status` = '" . $this->db->escape($data['status']). "',
            `discount_type` = '" . $this->db->escape($data['discount_type']). "',
            `discount_value` = '" . $this->db->escape($data['discount_value']) . "',
            `sort_order` = '" . $this->db->escape($data['sort_order']) . "',
            `products` = '" . $this->db->escape(json_encode($data['products'])) . "',
            `products_show` = '" . $this->db->escape(json_encode($data['products_show'])) . "',
            `categories_show` = '" . $this->db->escape(json_encode($data['categories_show'])) . "',
            `customer_group` = '" . $this->db->escape(json_encode($data['customer_group'])) . "',
            `store_id` = '" . $this->db->escape($data['store_id']) . "',
            `date_available` = '" . $this->db->escape($data['date_available']) . "',
            `date_added` = NOW(),
            `date_modified` = NOW()
        ");
        
        if ($return_id) {
            return $this->db->getLastId();
        }
        
        return true;
    }
    
    public function editBundle($data = array()) {
        $query = $this->db->query("UPDATE `" . DB_PREFIX . "so_product_bundles` SET 
            `name` = '" . $this->db->escape(json_encode($data['name'])) . "',
            `description` = '" . $this->db->escape(json_encode($data['description'])) . "',
            `image` = '" . $this->db->escape($data['image']) . "',
            `slug` =  '" . $this->db->escape($data['slug']) . "',
            `status` = '" . $this->db->escape($data['status']). "',
            `discount_type` = '" . $this->db->escape($data['discount_type']). "',
            `discount_value` = '" . $this->db->escape($data['discount_value']) . "',
            `sort_order` = '" . $this->db->escape($data['sort_order']) . "',
            `products` = '" . $this->db->escape(json_encode($data['products'])) . "',
            `products_show` = '" . $this->db->escape(json_encode($data['products_show'])) . "',
            `categories_show` = '" . $this->db->escape(json_encode($data['categories_show'])) . "',
            `customer_group` = '" . $this->db->escape(json_encode($data['customer_group'])) . "',
            `date_available` = '" . $this->db->escape($data['date_available']) . "',
            `date_modified` = NOW()
            WHERE `id` = '" . $this->db->escape($data['id']) . "'
        ");
        
        return true;
    }
    
    public function getBundle($bundle_id = 0) {
        $query = "SELECT * FROM `" . DB_PREFIX . "so_product_bundles` WHERE `id`='".$this->db->escape($bundle_id)."' LIMIT 1";
        
        $query = $this->db->query($query);
        
        if ($query->num_rows) {
            return $query->row;  
        } else {
            return false;
        }
		
    }
    
    public function deleteBundle($bundle_id = 0) {
        $query = "DELETE FROM `" . DB_PREFIX . "so_product_bundles` WHERE `id`='".$this->db->escape($bundle_id)."'";
        
        $query = $this->db->query($query);
        
        return true;
    }
    
    public function getTotalBundles($data = array()) {
        $query = "SELECT COUNT(*) as `count`  FROM `" . DB_PREFIX . "so_product_bundles` WHERE 1=1";
        
        $query .= " AND `store_id`='" . $this->db->escape($data['store_id']) . "'";
        
        if (!empty($data['filter_name'])) {
            $query .= " AND `name` LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
        }
        
        if (isset($data['filter_status']) && $data['filter_status'] !='*') {
            $query .= " AND `status` = '" . $this->db->escape($data['filter_status']) . "'";
        }
        
        if (!empty($data['filter_discount'])) {
            $query .= " AND `discount_value` = '" . $this->db->escape($data['filter_discount']) . "'";
        }
        
        if (!empty($data['filter_product_id'])) {
            $query .= " AND `products` LIKE '%\"" . $this->db->escape($data['filter_product_id']) . "\"%'";
        }

		$query = $this->db->query($query);
        
		return $query->row['count']; 
    }
    
    public function getBundles($data = array()) {
        $query = "SELECT * FROM `" . DB_PREFIX . "so_product_bundles` WHERE 1=1";
        
        $query .= " AND `store_id`='" . $this->db->escape($data['store_id']) . "'";
        
        if ($data['page']) {
			$start = ($data['page'] - 1) * $data['limit'];
		}
        
        if (!empty($data['filter_name'])) {
            $query .= " AND `name` LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
        }
        
        if (isset($data['filter_status']) && $data['filter_status'] !='*') {
            $query .= " AND `status` = '" . $this->db->escape($data['filter_status']) . "'";
        }
        
        if (!empty($data['filter_discount'])) {
            $query .= " AND `discount_value` = '" . $this->db->escape($data['filter_discount']) . "'";
        }
        
        if (!empty($data['filter_product_id'])) {
            $query .= " AND `products` LIKE '%\"" . $this->db->escape($data['filter_product_id']) . "\"%'";
        }
        
        $query .= " ORDER BY `id` DESC LIMIT ".$start.", ". $data['limit'];
        
        $query = $this->db->query($query);

        return $query->rows;
    }

    public function getStatistic($data = array()) {
        $sql = "SELECT
                    MIN(date_added) AS date_start,
                    MAX(date_added) AS date_end, 
                    SUM(IF(`key` = 'view', 1, 0)) AS `view`,
                    sUM(IF(`key` = 'addcart', 1, 0)) AS `addcart`,
                    SUM(IF(`key` = 'order', 1, 0)) AS `order`
                FROM `" . DB_PREFIX . "so_product_bundles_activity`
                WHERE store_id = " . (int)$this->config->get('config_store_id')."";

        if (isset($data['start_start']) && $data['start_start'] != '') {
            $sql .= " AND DATE(date_added) >= '" . $this->db->escape($data['start_start']) . "'";
        }
        if (isset($data['start_end']) && $data['start_end'] != '') {
            $sql .= " AND DATE(date_added) <= '" . $this->db->escape($data['start_end']) . "'";
        }

        if (isset($data['filter_group']) && $data['filter_group'] != '') {
            $group = $data['filter_group'];
            switch($group) {
                case 'day';
                    $sql .= " GROUP BY YEAR(date_added), MONTH(date_added), DAY(date_added)";
                    break;
                default:
                case 'week':
                    $sql .= " GROUP BY YEAR(date_added), WEEK(date_added)";
                    break;
                case 'month':
                    $sql .= " GROUP BY YEAR(date_added), MONTH(date_added)";
                    break;
                case 'year':
                    $sql .= " GROUP BY YEAR(date_added)";
                    break;
            }
        }
        $sql .= " ORDER BY date_added DESC";

        $query = $this->db->query($sql);

        return $query->rows;
    }
}