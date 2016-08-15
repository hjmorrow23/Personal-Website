<?php
function get_item_html($id,$item) {
    $output = '<div class="photo-container">
				<div class="photo">
				  <img src="' . $item["img"] . '" alt="' . $item["title"] . '" />
				  <div class="photo-overlay">
					  <h3>' . $item["title"] . '</h3>
					  <a href="project.php?id=' . $id . '">View Project</a>
					  </div>
				</div>
			</div>';
		    return $output;
}

function array_category($project,$title) {
    $output = array();
    
    foreach ($project as $id => $item) {
        if ($title == null OR strtolower($title) == strtolower($item["title"])) {
            $sort = $item["title"];
            $sort = ltrim($sort,"The ");
            $sort = ltrim($sort,"A ");
            $sort = ltrim($sort,"An ");
            $output[$id] = $sort;            
        }
    }
    
    asort($output);
    return array_keys($output);
}