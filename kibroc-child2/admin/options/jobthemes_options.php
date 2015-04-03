<?php


$themename = "Flatron";
$shortname = "jt";


	

$all_pages = get_pages();
$page_options = array();
$page_list = array();
$page_list_footer = array();
$checked_options = array();

foreach ($all_pages as $page){
    $page_list[] = $page->ID;
    $page_list_footer[] = $page->ID;
    $page_title = get_page($page->ID);
    $page_options[] = $page_title->post_title;
    $checked_options[] = "not";
}




	

 


$cat_options = array();
$all_cat = get_categories($cat_args);
$cat_list = array();
$checked_options = array();

foreach ($all_cat as $cat){
    $cat_title = get_cat_ID($cat->ID);
	$cat_options[$cat->cat_ID] = $cat->cat_name;
    $checked_options[] = "not";
	
	
	$cat_args = array(
			'orderby' => 'name',
			'order' => 'ASC',
			'hierarchical' => 0,
			'show_count' => 1,
			'use_desc_for_title' => 0,
			'hide_empty' => 0,
			'depth' => 0,
			'number' => null,
			'parent'=>0,
			'title_li' => '',
			'taxonomy' => APP_TAX_CAT,
			'cp_number' => $number,
			
		);
	
	
}


$all_cat_custom = get_categories( $args );
$cat_custom_options = array();
$cat_list = array();
$checked_options = array();

foreach ($all_cat_custom as $cat){
    $cat_title = get_cat_ID($cat->ID);
	$cat_custom_options[] = $cat->cat_name;
    $checked_options[] = "not";
}




$options = array(    
    
    /*
     * 
     * General Settings Section
     * 
     */
	
    array(
        "type" => "section",
        "icon" => "jobthemes-icon-home",
        "title" => "General Settings",
        "id" => "general",
        "expanded" => "true"
    ),
    
    
    
    
    
    
    array(
        "section" => "general",
        "type" => "heading",
        "title" => "Visual (logo, favicon)",
        "id" => "general-visual"
    ),
    
	
	
	  array(
    "under_section" => "general-visual",
  	"name" => "Enable logo:",
	"tip" => "Paste the URL of your web site logo image here. It will replace the default Simplux logo.(i.e. yoursite.com/logo.jpg)",
	"desc" => "",
	"id" => "use_logo",
	"type" => "select",
	"options" => array("Yes", "No"),
	"default" => "Yes",
	"std" => ""),
	
    array(
        "under_section" => "general-visual",
        "type" => "image",
        "placeholder" => "http://example.com/logo.png",
        "name" => "Logo",
        "id" => "logo_url",
        "desc" => "Paste the URL to your logo, or upload it here.",
		"tip" => "Paste the URL of your web site logo image here. It will replace the default Simplux logo.(i.e. yoursite.com/logo.jpg)",
        "default" => ""),
    
    array(
        "under_section" => "general-visual",
        "type" => "image",
        "placeholder" => "http://example.com/favicon.png",
        "name" => "Favicon",
        "id" => "favicon",
        "desc" => "Paste the URL to your favicon, or upload it here (resolution of 32x32 or 16x16)",
		"tip" => "Paste the URL of favicon image here. (i.e. yoursite.com/favicon.ico)",
        "default" => ""),
    
    
	
	
	 array(
        "title" => "Social Networks:",
        "under_section" => "general-visual",
        "type" => "small_heading",
    ),
	array( 
	"under_section" => "general-visual",
	"name" => "Facebook",
	"desc" => "Paste your facebook page ID here.",
	"id" => "facebook_id",
	"type" => "text",
	"tip" => "Paste your Facebook Page ID here. You must have a Facebook account and page setup first.",
	"std" => ""),
	
	array( 
	"under_section" => "general-visual",
	"name" => "Twitter",
	"desc" => "Paste your twitter page ID here.",
	"id" => "twitter_id",
	"type" => "text",
	"tip" => "Paste your Facebook Page ID here. You must have a Facebook account and page setup first.",
	"std" => ""),
	
	array( 
	"under_section" => "general-visual",
	"name" => "Linkedin",
	"desc" => "Paste your linkedin id here.",
	"id" => "linkedin_id",
	"type" => "text",
	"tip" => "Paste your Facebook Page ID here. You must have a Facebook account and page setup first.",
	"std" => ""),
	
	array( 
	"under_section" => "general-visual",
	"name" => "Google plus",
	"desc" => "Paste your google plus id here.",
	"id" => "gplus_id",
	"type" => "text",
	"tip" => "Paste your google plus Page ID here. You must have a google plus account and page setup first.",
	"std" => ""),
	
	array( 
	"under_section" => "general-visual",
	"name" => "Feedburner",
	"desc" => "Paste your feedburner address here.",
	"id" => "feedburner_url",
	"type" => "text",
	"tip" => "Paste your Feedburner address here. It will automatically redirect your default RSS feed to Feedburner. You must have a Google Feedburner account setup first.",
	"std" => ""),
	
	
	
	
		  array(
        "section" => "general",
        "type" => "heading",
        "title" => "Home page content",
        "id" => "home"
    ),
	
	
	
	
	
	
	
		array(
    "under_section" => "home",
	"type" => "checkbox",
	"name" => "<strong>Enable custom home page</strong>",
	"id" => array( "enable_contents" ),				
	"options" => array("Enable"),
    "desc" => "Select this if you want to display the content of a page in the home page",
	"tip" => "enable to custom content for the home page",
	"default" => "Enable"),
    
    array(
        "type" => "toggle_div_start",
        "display_checkbox_id" => "enable_contents",
            "under_section" => "home",
    ),
	
	
	
	
	 array(
    "under_section" => "home",
	"type" => "select",
	"name" => "Home page custom content",
	"id" => "home_page_import",			
	"options" => $page_options,
        "desc" => "Choose which pages you want to display in the home page above the tabs.",
	"default" => $checked_options),
	
	
	
	array(
        "type" => "toggle_div_end",
         "under_section" => "home",
    ),
	
	
	
	 array(
        "title" => "Home page tabs:",
         "under_section" => "home",
        "type" => "small_heading",
    ),
	
	
	
	
	array( 
	"under_section" => "home",
	"name" => "Category #1",
	"id" => "cat_1ssssssssssss",
	"type" => "selectpages",
	"tip" => "",),
	
	
	
	
	
	
	
		array( 
	"under_section" => "home",
	"name" => "Title of tab #1",
	"desc" => "Set the title You want to display in the first tab .i.e. Recent ads",
	"id" => "tab_1_name",
	"type" => "text",
	"default" => "Just listed",
	"tip" => "Set the title of the first tab in home page,If you don't want to display any content,leave it empty.",
	"std" => ""),
	
	array( 
	"under_section" => "home",
	"name" => "Content if the tab #1 clicked ",
	"desc" => "Set the area you want to display by clicking on first tab, i.e: Just listed.",
	"id" => "tab_1",
	"type" => "select",
	"default" => "just-listed",
	"options" => array(
	"Just-listed",
	"Popular",
	"Random" ,
	"Ad-categories",
	"No tab"),
	"tip" => "If you want to display nothing,Select -Nothing- in options and empty the title above.",
	"std" => "Just-listed"),
	
	
	

	
	array( 
	"under_section" => "home",
	"name" => "Title of tab #2",
	"desc" => "Set the title You want to display in the second tab, i.e.  Popular ads",
	"id" => "tab_2_name",
	"type" => "text",
	"default" => "Popular ads",
	"tip" => "Set the title of the second tab in home page,If you dont want to display any content,leave it empty.",
	"std" => ""),
	
	array( 
	"under_section" => "home",
		"name" => "Content if the tab #2 clicked ",
	"desc" => "Set the area you want to display by clicking on the second tab i.e: Popular ads.",
	"id" => "tab_2",
	"type" => "select",
	"options" => array(
	"Just-listed",
	"Popular",
	"Random" ,
	"Ad-categories",
	"No tab"),
	"default" => "Popular",
	"tip" => "Set which section you want to display, If you want to display nothing,Select -Nothing- in options and empty the title above.",
	"std" => ""),
	
	
	
	
	
	
	
		array( 
	"under_section" => "home",
	"name" => "Title of tab #3",
	"desc" => "Set the title You want to display in the third tab, i.e. Random ads",
	"id" => "tab_3_name",
	"type" => "text",
	"default" => "Random ads",
	"tip" => "Set the title of the third tab in home page,If you dont want to display any content,leave it empty.",
	"std" => ""),
	
	
	array( 
	"under_section" => "home",
		"name" => "Content if the tab #3 clicked ",
	"desc" => "Set the area you want to display by clicking on the third tab, i.e: Random ads.",
	"id" => "tab_3",
	"type" => "select",
	"options" => array(
	"Just-listed",
	"Popular",
	"Random" ,
	"Ad-categories",
	"No tab"),
	"default" => "Random",
	"tip" => "Set which section you want to display,If you want to display nothing,Select -Nothing- in options and empty the title above.",
	"std" => ""),
	
	
	

	
	array( 
	"under_section" => "home",
	"name" => "Title of tab #4",
	"desc" => "Set the title You want to display in forth the tabs, i.e. Ad categories",
	"id" => "tab_4_name",
	"type" => "text",
	"default" => "Ad categories",
	"tip" => "Set the title of the forth tab in home page,If you dont want to display any content,leave it empty.",
	"std" => ""),
	
	
	
	
	array( 
	"under_section" => "home",
	"name" => "Content if the tab #4 clicked ",
	"desc" => "Set the area you want to display by clicking on forth tab, i.e. Ad categories.",
	"id" => "tab_4",
	"type" => "select",
	"options" => array(
	"Just-listed",
	"Popular",
	"Random" ,
	"Ad-categories",
	"No tab"),
	"default" => "Ad-categories",
	"tip" => "Set which section you want to display,If you want to display nothing,Select -Nothing- in options and empty the title above.",
	"std" => ""),
	
	
	
	
	
	
	
	

	/*
     * 
     * Categories
     * 
     */
	
	
	
	
	
	
	array(
    "section" => "general",
    "type" => "heading",
    "title" => "Home categories",
    "id" => "categories"
    ),
	
	
		
	
	
	 array(
        "title" => "<ul><li>- Select the category you want to use the icon for, then upload the image.You can use up to 35 icons.</li><li>- You can use free icons located in flatron/images/icons-to-use/.</li><ul>",
        "under_section" => "categories",
        "type" => "small_infos",
    ),
	
	
	array( 
	"under_section" => "categories",
	"name" => "Category #1",
	"id" => "cat_1",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #1",
        "id" => "cat_img_1",
		"tip" => "",
        "default" => ""),
	
	
	
	
	
	
	array( 
	"under_section" => "categories",
	"name" => "Category #2",
	"id" => "cat_2",
	"type" => "select",
	"type" => "selectcats",
	"tip" => ""),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #2",
        "id" => "cat_img_2",
		"tip" => "",
        "default" => ""),
		
			
		
		array( 
	"under_section" => "categories",
	"name" => "Category #3",
	"id" => "cat_3",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #3",
        "id" => "cat_img_3",
		"tip" => "",
        "default" => ""),
		
		
		
		array( 
	"under_section" => "categories",
	"name" => "Category #4",
	"id" => "cat_4",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #4",
        "id" => "cat_img_4",
 		"tip" => "",
        "default" => ""),
		
		
			
		
		array( 
	"under_section" => "categories",
	"name" => "Category #5",
	"id" => "cat_5",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #5",
        "id" => "cat_img_5",
		"tip" => "",
        "default" => ""),
	
	
	
	
	
	 array(
        "title" => "Extra options:",
        "under_section" => "categories",
        "type" => "small_heading",
    ),

array(
    "under_section" => "categories",
	"type" => "checkbox",
	"name" => "<strong>Show more 5 fields</strong>",
	"id" => array( "enable_icon5" ),				
	"options" => array("Display the fields"),
    "desc" => "Select this if you want to use more options for the categories.",
	"tip" => "Show/Hide options.",
	"default" => "not"),
	
	 array(
        "type" => "toggle_div_start",
        "display_checkbox_id" => "enable_icon5",
        "under_section" => "categories",
    ),



	
		
		array( 
	"under_section" => "categories",
	"name" => "Category #6",
	"id" => "cat_6",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #6",
        "id" => "cat_img_6",
		"tip" => "",
        "default" => ""),
	
    


		array( 
	"under_section" => "categories",
	"name" => "Category #7",
	"id" => "cat_7",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #7",
        "id" => "cat_img_7",
		"tip" => "",
        "default" => ""),
		
		
		
		
			array( 
	"under_section" => "categories",
	"name" => "Category #8",
	"id" => "cat_8",
	"type" => "selectcats",
	"tip" => "",),
	
		
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #8",
        "id" => "cat_img_8",
		"tip" => "",
        "default" => ""),




		array( 
	"under_section" => "categories",
	"name" => "Category #9",
	"id" => "cat_9",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #9",
        "id" => "cat_img_9",
		"tip" => "",
        "default" => ""),




		array( 
	"under_section" => "categories",
	"name" => "Category #10",
	"id" => "cat_10",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #10",
        "id" => "cat_img_10",
		"tip" => "",
        "default" => ""),		
	
	   array(
        "type" => "toggle_div_end",
        "under_section" => "categories",
    ),
	
	
	
	
	array(
    "under_section" => "categories",
	"type" => "checkbox",
	"name" => "<strong>Show more 5 fields</strong>",
	"id" => array( "enable_icon10" ),				
	"options" => array("Display the fields"),
    "desc" => "Select this if you want to use more options for the categories.",
	"tip" => "Show/Hide options.",
	"default" => "not"),
	
	 array(
        "type" => "toggle_div_start",
        "display_checkbox_id" => "enable_icon10",
        "under_section" => "categories",
    ),
	
	
	
	
			array( 
	"under_section" => "categories",
	"name" => "Category #11",
	"id" => "cat_11",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #11",
        "id" => "cat_img_11",
		"tip" => "",
        "default" => ""),
		
		
		
		
		
				array( 
	"under_section" => "categories",
	"name" => "Category #12",
	"id" => "cat_12",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #12",
        "id" => "cat_img_12",
		"tip" => "",
        "default" => ""),
		
		
	
				array( 
	"under_section" => "categories",
	"name" => "Category #13",
	"id" => "cat_13",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #13",
        "id" => "cat_img_13",
		"tip" => "",
        "default" => ""),
		
		
		
	

			array( 
	"under_section" => "categories",
	"name" => "Category #14",
	"id" => "cat_14",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #14",
        "id" => "cat_img_14",
		"tip" => "",
        "default" => ""),



	
		
				array( 
	"under_section" => "categories",
	"name" => "Category #15",
	"id" => "cat_15",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #15",
        "id" => "cat_img_15",
		"tip" => "",
        "default" => ""),	
		
		
		
		
	 	
	   array(
        "type" => "toggle_div_end",
        "under_section" => "categories",
    ),	
	
	
	
	
	
	
	
	array(
    "under_section" => "categories",
	"type" => "checkbox",
	"name" => "<strong>Show more 5 fields</strong>",
	"id" => array( "enable_icon15" ),				
	"options" => array("Display the fields"),
    "desc" => "Select this if you want to use more options for the categories.",
	"tip" => "Show/Hide options.",
	"default" => "not"),
	
	 array(
        "type" => "toggle_div_start",
        "display_checkbox_id" => "enable_icon15",
        "under_section" => "categories",
    ),
	
	
	
			array( 
	"under_section" => "categories",
	"name" => "Category #16",
	"id" => "cat_16",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #16",
        "id" => "cat_img_16",
		"tip" => "",
        "default" => ""),
		
		
		
		
		
				array( 
	"under_section" => "categories",
	"name" => "Category #17",
	"id" => "cat_17",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #17",
        "id" => "cat_img_17",
		"tip" => "",
        "default" => ""),
		
		
	
				array( 
	"under_section" => "categories",
	"name" => "Category #18",
	"id" => "cat_18",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #18",
        "id" => "cat_img_18",
		"tip" => "",
        "default" => ""),
		
		
		
	

			array( 
	"under_section" => "categories",
	"name" => "Category #19",
	"id" => "cat_19",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #19",
        "id" => "cat_img_19",
		"tip" => "",
        "default" => ""),



	
		
				array( 
	"under_section" => "categories",
	"name" => "Category #20",
	"id" => "cat_20",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #20",
        "id" => "cat_img_20",
		"tip" => "",
        "default" => ""),	
		
		
		
		
	   array(
        "type" => "toggle_div_end",
        "under_section" => "categories",
    ),	
	
	
	
	array(
    "under_section" => "categories",
	"type" => "checkbox",
	"name" => "<strong>Show more 5 fields</strong>",
	"id" => array( "enable_icon25" ),				
	"options" => array("Display the fields"),
    "desc" => "Select this if you want to use more options for the categories.",
	"tip" => "Show/Hide options.",
	"default" => "not"),
	
	 array(
        "type" => "toggle_div_start",
        "display_checkbox_id" => "enable_icon25",
        "under_section" => "categories",
    ),
	
	
	
	
			array( 
	"under_section" => "categories",
	"name" => "Category #21",
	"id" => "cat_21",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #21",
        "id" => "cat_img_21",
		"tip" => "",
        "default" => ""),
		
		
		
		
		
				array( 
	"under_section" => "categories",
	"name" => "Category #22",
	"id" => "cat_22",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #22",
        "id" => "cat_img_22",
		"tip" => "",
        "default" => ""),
		
		
	
				array( 
	"under_section" => "categories",
	"name" => "Category #23",
	"id" => "cat_23",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #23",
        "id" => "cat_img_23",
		"tip" => "",
        "default" => ""),
		
		
		
	

			array( 
	"under_section" => "categories",
	"name" => "Category #24",
	"id" => "cat_24",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #24",
        "id" => "cat_img_24",
		"tip" => "",
        "default" => ""),



	
		
				array( 
	"under_section" => "categories",
	"name" => "Category #25",
	"id" => "cat_25",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #25",
        "id" => "cat_img_25",
		"tip" => "",
        "default" => ""),	
		
		
		
		
	 	
	   array(
        "type" => "toggle_div_end",
        "under_section" => "categories",
    ),	
	
	
	
	
	
	
	
	array(
    "under_section" => "categories",
	"type" => "checkbox",
	"name" => "<strong>Show more 5 fields</strong>",
	"id" => array( "enable_icon30" ),				
	"options" => array("Display the fields"),
    "desc" => "Select this if you want to use more options for the categories.",
	"tip" => "Show/Hide options.",
	"default" => "not"),
	
	 array(
        "type" => "toggle_div_start",
        "display_checkbox_id" => "enable_icon30",
        "under_section" => "categories",
    ),
	
	
	
	
			array( 
	"under_section" => "categories",
	"name" => "Category #26",
	"id" => "cat_26",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #26",
        "id" => "cat_img_26",
		"tip" => "",
        "default" => ""),
		
		
		
		
		
				array( 
	"under_section" => "categories",
	"name" => "Category #27",
	"id" => "cat_27",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #27",
        "id" => "cat_img_27",
		"tip" => "",
        "default" => ""),
		
		
	
				array( 
	"under_section" => "categories",
	"name" => "Category #28",
	"id" => "cat_28",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #28",
        "id" => "cat_img_28",
		"tip" => "",
        "default" => ""),
		
		
		
	

			array( 
	"under_section" => "categories",
	"name" => "Category #29",
	"id" => "cat_29",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #29",
        "id" => "cat_img_29",
		"tip" => "",
        "default" => ""),



	
		
				array( 
	"under_section" => "categories",
	"name" => "Category #30",
	"id" => "cat_30",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #30",
        "id" => "cat_img_30",
		"tip" => "",
        "default" => ""),	
		
		
		
		
	 	
	   array(
        "type" => "toggle_div_end",
        "under_section" => "categories",
    ),	
	
	
	
	
	
	array(
    "under_section" => "categories",
	"type" => "checkbox",
	"name" => "<strong>Show more 5 fields</strong>",
	"id" => array( "enable_icon35" ),				
	"options" => array("Display the fields"),
    "desc" => "Select this if you want to use more options for the categories.",
	"tip" => "Show/Hide options.",
	"default" => "not"),
	
	 array(
        "type" => "toggle_div_start",
        "display_checkbox_id" => "enable_icon35",
        "under_section" => "categories",
    ),
	
	
	
	
			array( 
	"under_section" => "categories",
	"name" => "Category #31",
	"id" => "cat_31",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #31",
        "id" => "cat_img_31",
		"tip" => "",
        "default" => ""),
		
		
		
		
		
				array( 
	"under_section" => "categories",
	"name" => "Category #32",
	"id" => "cat_32",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #32",
        "id" => "cat_img_32",
		"tip" => "",
        "default" => ""),
		
		
	
				array( 
	"under_section" => "categories",
	"name" => "Category #33",
	"id" => "cat_33",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #33",
        "id" => "cat_img_33",
		"tip" => "",
        "default" => ""),
		
		
		
	

			array( 
	"under_section" => "categories",
	"name" => "Category #34",
	"id" => "cat_34",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #34",
        "id" => "cat_img_34",
		"tip" => "",
        "default" => ""),



	
		
				array( 
	"under_section" => "categories",
	"name" => "Category #35",
	"id" => "cat_35",
	"type" => "selectcats",
	"tip" => "",),
	
	
	
	
	  array(
        "under_section" => "categories",
        "type" => "image",
        "placeholder" => "",
        "name" => "Icon #35",
        "id" => "cat_img_35",
		"tip" => "",
        "default" => ""),	
		
		
		
		
	 	
	   array(
        "type" => "toggle_div_end",
        "under_section" => "categories",
    ),	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	array(
        "section" => "general",
        "type" => "heading",
        "title" => "Layouts",
        "id" => "layout"
    ),
	
	
	
	
		
	
	
	
		 array(
    "under_section" => "layout",
	"type" => "select",
	"name" => "Enable featured slider",
	"id" => "enable_featured_main" ,				
	"options" => array("Enable","Disable"),
    "desc" => "This will display the featured ads in the header.",
	"tip" => "Show/Hide the main featured ads slider.",
	"default" => "Enable"),
	
	
	
		
	array(        
    "under_section" => "layout",
	"show_labels" => "false",
    "type" => "radio_image",
	"image_src" => array(
	get_bloginfo('stylesheet_directory')."/admin/"."assets/right.png",
	get_bloginfo('stylesheet_directory')."/admin/"."assets/left.png"),
	"image_size" => array( "50"),
	"name" => "<strong>Main layout:</strong>",
	"id" => "main_layout",
	"options" => array("right","left"),	
	"default" => "right",	
	"desc" => "Select which layout you want for your site.",
	"tip" => "Select which layout you want for your site, the sidebar in the right by default",
	),
	
	
	
	
		
		
	array(        
    "under_section" => "layout",
	"show_labels" => "false",
    "type" => "radio_image",
	"image_src" => array(
	get_bloginfo('stylesheet_directory')."/admin/"."assets/footer-0.png",
	get_bloginfo('stylesheet_directory')."/admin/"."assets/footer-1.png",
	get_bloginfo('stylesheet_directory')."/admin/"."assets/footer-2.png",
	get_bloginfo('stylesheet_directory')."/admin/"."assets/footer-3.png",
	get_bloginfo('stylesheet_directory')."/admin/"."assets/footer-4.png"),
	"image_size" => array( "50"),
	"name" => "<strong>Footer layout:</strong>",
	"id" => "footer_layout",
	"options" => array( "0", "1","2","3","4"),					
	"desc" => "Select which layout you want for  the footer.",
	"tip" => "Select which layout you want for the footer.You can use no footer, one,2 or three footer areas.",
	"default" => "4" ),
	
	
		
	
	
	
	
	
	
	
	
	
		
	
 	
	
	
    /*
     * 
     * Appearance Section
     * 
     */
	
    array(
        "type" => "section",
        "icon" => "jobthemes-icon-font",
        "title" => "Appearance",
        "id" => "appearance",
        "expanded" => "true"
    ),
    
    array(
        "section" => "appearance",
        "type" => "heading",
        "title" => "Theme settings",
        "id" => "appearance-settings"
    ),    
    
    array(        
        "under_section" => "appearance-settings",
	"show_labels" => "false",
        "type" => "radio_image",
	"image_src" => array(
			get_bloginfo('stylesheet_directory')."/admin/"."assets/white.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/blue.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/green.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/orange.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/red.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/teal.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/gray.png",),
			
	"image_size" => array( "40"),
	"name" => "<strong>Color schemes:</strong>",
	"id" => "jt_colors",
	"options" => array( "style-default.css", "blue.css", "green.css","orange.css", "red.css","teal.css", "gray.css"),					
	"desc" => "Default color",
	  "tip" => "Set the color scheme you would like to use.",
	"default" => "" ),
    
    

    
    
    array(
        "title" => "Custom Colors",
        "under_section" => "appearance-settings",
        "type" => "small_heading",
    ),
    
    
		array(
    "under_section" => "appearance-settings", //Required
    "type" => "color", //Required
    "name" => "Background color:", //Required
    "id" => "background_color", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "placeholder" => "",
    "desc" => "Set the background color.",
	 "tip" => "Set the background color of your website.Clear the input if you want to use the default.",
    "default" => ""
),





  array(
        "title" => "Custom Backgrounds",
        "under_section" => "appearance-settings",
        "type" => "small_heading",
    ),
	
   
   array(
        "under_section" => "appearance-settings",
        "type" => "image",
        "placeholder" => "http://example.com/background.jpg",
        "name" => "Background image:",
        "id" => "background_image",
        "desc" => "Paste the URL to the background image, or upload it here).",
		"tip" => "Upload an image you would like to use as background image.Note: This override the background color.",
        "default" => ""),
	
	array( 
	"under_section" => "appearance-settings", 
	"name" => "Background repetition:",
	"desc" => "Set the repetition option of the background.",
	"id" => "background_repeat",
	"type" => "select",
	"options" => array	(
	"No repeat" => "no-repeat",
	"Repeat" =>"repeat" ,
	"Repeat-x" => "repeat-x",
	"Repeat-y" =>"repeat-y" ),
	"tip" => "Set the repetition option of the background image.",
	"std" => ""),
	
		array( 
	"under_section" => "appearance-settings", 
	"name" => "Background attachment:",
	"desc" => "Set the attachment option of the background.",
	"id" => "background_attach",
	"type" => "select",
	"options" => array	(
	"scroll" => "Default",
	"fixed" =>"Fixed" ),
	"tip" => "Set the attachment option of the background.It can be either fixed of srolling down while browsing the site.",
	"std" => ""),
	
	
	
	
	
	
	
	
	array(
        "under_section" => "appearance-settings",
	"type" => "checkbox",
	"name" => "<strong>Use patterns</strong>",
	"id" => array( "enable_patterns" ),				
	"options" => array("Display the list of patterns"),
    "desc" => "Select this if you want to use patterns",
	"tip" => "Show/Hide patterns to use for your website.",
	"default" => "yes"),
    
    array(
        "type" => "toggle_div_start",
        "display_checkbox_id" => "enable_patterns",
        "under_section" => "appearance-settings",
    ),
    
	array( 
	"under_section" => "appearance-settings",
	"name" => "Enable patterns:",
	"desc" => "",
	"default" => "No",
	"id" => "override_patern",
	"type" => "select",
	"options" => array("Yes", "No"),
	"tip" => "Select Yes if you want to use patters instead of background or background images.",
	"std" => "No"),
	
	  
	  array(        
        "under_section" => "appearance-settings",
	"show_labels" => "false",
        "type" => "radio_image",
	"image_src" => array(
			get_bloginfo('stylesheet_directory')."/admin/"."assets/bedge.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/cardboard.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/climpek.png",	
            get_bloginfo('stylesheet_directory')."/admin/"."assets/diagonal-waves.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/escheresque.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/light-noise.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/nasty-fabric.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/navy-blue.png",	
            get_bloginfo('stylesheet_directory')."/admin/"."assets/noisy-grid.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/noisy-net.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/norwegian-rose.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/office.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/pyramid.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/reticular-tissue.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/shattered.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/straws.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/stressed-linen.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/subtle-carbon.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/white-tiles.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/subtle-dots.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/triangles-pattern.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/gray-floral.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/cartographer.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/tapestry.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/psychedelic.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/gplay.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/shine-dotted.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/gradient-squares.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/tasky.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/dark-dot.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/nami.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/zig-zag.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/circles.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/dark-mosaic.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/random-grey.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/dark-denim.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/diagmonds.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/use-your-illusion.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/grid-me.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/soft-pad.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/plaid.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/floral-motif.png"
			
			),
	"image_size" => array( "50"),
	"name" => "Choose a pattern:",
	"id" => "paterns",
	"options" => array("bedge", "cardboard", "climpek", "diagonal-waves", "escheresque", "light-noise", "nasty-fabric", "navy-blue" , "noisy-grid", "noisy-net", "norwegian-rose", "office", "pyramid" , "reticular-tissue", "shattered" , "straws", "stressed-linen", "subtle-carbon", "white-tiles", "subtle-dots", "triangles-pattern", 
	"gray-floral","cartographer","tapestry","psychedelic","gplay","shine-dotted","gradient-squares","tasky","dark-dot","nami","zig-zag","circles","dark-mosaic","random-grey","dark-denim","diagmonds","use-your-illusion","grid-me","soft-pad","plaid","floral-motif"),	
	"desc" => "Choose the pattern to use as background.",
	"tip" => "Choose what patter you would like to use for your website.",
	"default" => "No" ),
	  
	  
	  
    
    array(
        "type" => "toggle_div_end",
        "under_section" => "appearance-settings",
    ),
	
	
	
 
   array(
        "title" => "Custom CSS",
        "under_section" => "appearance-settings",
        "type" => "small_heading",
    ),
	
	
 	array( 
	"under_section" => "appearance-settings",
	"name" => "Custom CSS:",
	"desc" => "Put here your custom css",
	"id" => "custom_css",
	"type" => "textarea",
	"tip" => "Paste here any custom css  classes you want to use.",
	"std" => ""),
 
 
 
 
 
 
 
  array(
        "section" => "appearance",
        "type" => "heading",
        "title" => "Header settings",
        "id" => "header-settings"
    ), 
 
 
 
 
 
 	array(
    "under_section" => "header-settings",
    "type" => "color", 
    "name" => "Top bar background color:", 
    "id" => "top_header_color", 
    "placeholder" => "",
    "desc" => "Set the top bar background color.",
	 "tip" => "Set the top bar background color.Clear the input if you want to use the default.",
    "default" => ""
),
 
 
 
 
 
 	array(
    "under_section" => "header-settings",
    "type" => "color", 
    "name" => "Header background color:", 
    "id" => "header_color", 
    "placeholder" => "",
    "desc" => "Set the header background color.",
	 "tip" => "Set the heder background color.Clear the input if you want to use the default.",
    "default" => ""
),
  
 
 
  array(
        "under_section" => "header-settings",
        "type" => "image",
        "placeholder" => "http://example.com/background.jpg",
        "name" => "Header background image:",
        "id" => "header_background_image",
        "desc" => "Paste the URL to the background image, or upload it here).",
		"tip" => "Upload an image you would like to use as background image for the header .Note: This override the background color.",
        "default" => ""),
 
 
 
 
 
 
 
 
 
 
  array(
        "section" => "appearance",
        "type" => "heading",
        "title" => "Footer settings",
        "id" => "footer-settings"
    ), 
 
 
 
 
 
 	array(
    "under_section" => "footer-settings",
    "type" => "color", 
    "name" => "Footer background color:", 
    "id" => "footer_background_color", 
    "placeholder" => "",
    "desc" => "Set the footer background color.",
	 "tip" => "Set the footer background color.Clear the input if you want to use the default.",
    "default" => ""
),
 
 
 
 
 
 	array(
    "under_section" => "footer-settings",
    "type" => "color", 
    "name" => "Bottom bar background color:", 
    "id" => "bottom_footer_color", 
    "placeholder" => "",
    "desc" => "Set the background of the bottom footer bar.",
	 "tip" => "Set the background of the bottom footer bar.",
    "default" => ""
),
  
 
 
 
 	array(
    "under_section" => "footer-settings",
    "type" => "color", 
    "name" => "Footer borders colors:", 
    "id" => "footer_border_color", 
    "placeholder" => "",
    "desc" => "Set colors of the borders of the footer.",
	 "tip" => "Set colors of the borders of the footer.",
    "default" => ""
),
  
 
 
  array(
        "under_section" => "footer-settings",
        "type" => "image",
        "placeholder" => "http://example.com/background.jpg",
        "name" => "Footer background image:",
        "id" => "footer_background_image",
        "desc" => "Paste the URL to the background image, or upload it here).",
		"tip" => "Upload an image you would like to use as the footer background .Note: This override the background color.",
        "default" => ""),
 
 
 
 
 
 
 
 
 	 array(
        "section" => "appearance",
        "type" => "heading",
        "title" => "Font colors",
        "id" => "colors-fonts"
		),
		
		
		
		array(
    "under_section" => "colors-fonts", 
    "type" => "color", 
    "name" => "Content link color:", 
    "id" => "color_link", 
    "placeholder" => "",
    "desc" => "Set the link color.",
	"tip" => "Set the color of the link.",
    "default" => "",
),

		

array(
    "under_section" => "colors-fonts", 
    "type" => "color", 
    "name" => "Content link color on mouse over:", 
    "id" => "color_hover", 
    "placeholder" => "",
    "desc" => "Set the hover color.",
	"tip" => "Set the color of the link when mouse over.",
    "default" => "",
),





 array(
        "title" => "Menu colors",
        "under_section" => "colors-fonts",
        "type" => "small_heading",
    ),
		

	array(
    "under_section" => "colors-fonts", 
    "type" => "color", 
    "name" => "Menu Font color:", 
    "id" => "menu_font_color", 
    "display_checkbox_id" => "toggle_checkbox_id",
    "placeholder" => "",
    "desc" => "Set the font color of the menu links.",
	"tip" => "Set the color of the menu items.", 
    "default" => ""
),
		
	
	array(
    "under_section" => "colors-fonts", 
    "type" => "color", 
    "name" => "Menu font color on mouse over:", 
    "id" => "menu_font_color_hover", 
    "display_checkbox_id" => "toggle_checkbox_id",
    "placeholder" => "",
    "desc" => "Set the hover color of the menu.",
	"tip" => "Set the color of the menu items on mouse over.", 
    "default" => ""
),








 array(
        "title" => "Footer colors ",
        "under_section" => "colors-fonts",
        "type" => "small_heading",
    ),
		
		
		
	array(
    "under_section" => "colors-fonts", 
    "type" => "color", 
    "name" => "Heading footer:", 
    "id" => "heading_footer_font", 
    "placeholder" => "",
    "desc" => "Set the color of the heading titles of the footer.",
	"tip" => "Set the color of the heading titles of the footer.", 
    "default" => ""
),	
		
		

	array(
    "under_section" => "colors-fonts", 
    "type" => "color", 
    "name" => "Footer font color:", 
    "id" => "footer_font_color", 
    "display_checkbox_id" => "toggle_checkbox_id",
    "placeholder" => "",
    "desc" => "Set the font color of the footer links",
	"tip" => "Set the color of the footer links.", 
	"default" => ""
),
		
	
	array(
    "under_section" => "colors-fonts", 
    "type" => "color", 
    "name" => "Footer font color on mouse over:", 
    "id" => "footer_font_color_hover", 
    "display_checkbox_id" => "toggle_checkbox_id",
    "placeholder" => "",
    "desc" => "Set the hover color of the footer",
	"tip" => "Set the color of the footer links when mouse over.", 
    "default" => ""
),
 


	

    
       
    /*
     * 
     *  = Advertisings
     * 
     */
    
    
    
     array(
        "type" => "section",
        "icon" => "jobthemes-icon-window",
        "title" => "Advertising Settings",
        "id" => "advertising",
        "expanded" => "true"
    ),
    
     
	  array(
        "section" => "advertising",
        "type" => "heading",
        "title" => "Home spot",
        "id" => "adv_home"
    ),
    
		
	
	 array(
        "title" => "Home banner above tabs",
        "under_section" => "adv_home",
        "type" => "small_heading",
    ),
	
	array( 
	"under_section" => "adv_home", 
	"name" => "Enable Advertising:",
	"desc" => "Change this option to enable or disable the home page banner on top of the tabs.",
	"id" => "adv_home_banner",
	"type" => "select",
	"options" => array	(
	"yes" => "Yes",
	"no" =>"No" ),
	"default" => "No",
	"tip" => "Enable an advertising spot to be placed in the home page banner on top of the tabs.", 
	"std" => ""),
	
	array( 
	"under_section" => "adv_home",
	"name" => "Banner position:",
	"desc" => "",
	"id" => "ad_home_float",
	"type" => "select",
	"validate" => "html",
	"options" => array("Center", "Left", "Right"),
	"tip" => "Set the position of the home ad spot.",
	"std" => ""),
	
	
	
	
	
	
	
	
	
	
	array( 
	"under_section" => "adv_home", 
	"name" => "On top of tabs:",
	"desc" => "This can be adsense code, javscript,an image, a text,(468X60)",
	"id" => "home_banner",
	"validate" => "html",
	"type" => "textarea",
	"tip" => "Paste here the url or code of the ad to be placed in home page sidebar.", 
	"std" => ""),
	
	
	
	
	
	
	 array(
        "section" => "advertising",
        "type" => "heading",
        "title" => "Header spot",
        "id" => "adv_header"
    ),
	
	
		array( 
	"under_section" => "adv_header",
	"name" => "Enable Advertising:",
	"desc" => "Change this option to enable or disable a spot in header (under menu).",
	"id" => "adv_header",
	"type" => "select",
	"options" => array("No", "Home page only", "Inner pages only", "Entire site"),
	"default" => "No",
	"tip" => "Enable an advertising spot to be placed in the header of your website.", 
	"std" => ""),
	
	
	

	array( 
	"under_section" => "adv_header",
	"name" => "Spot Width Size:",
	"desc" => "Set the size of the spot, i.e.:728 ",
	"id" => "ad_header_size",
	"type" => "text",
	"default" => "728",
	"tip" => "Set the size of the header advertising ad, it's 728px by default.",
	"std" => ""),
	
	
	
		array( 
		"under_section" => "adv_header",
		"name" => "Banner position:",
	"desc" => "",
	"id" => "ad_header_float",
	"type" => "select",
	"validate" => "html",
	"options" => array("Center", "Left", "Right"),
	"tip" => "Set the position of the header ad spot.",
	"std" => ""),
	
	
	
	
	
	
	
	
array(
	"under_section" => "adv_header",
	"name" => "Header Banner Spot (728X90):",
	"desc" => "This can be adsense code, javscript,an image, a text,..",
	"id" => "ad_header",
	"type" => "textarea",
	"tip" => "Paste here the url or code of the ad to be placed in the header.",
	"std" => ""),
	
	
		

		
	  
	  array(
        "section" => "advertising",
        "type" => "heading",
        "title" => "Footer spot",
        "id" => "adv_footer"
    ),
	
	array( 
	"under_section" => "adv_footer",
	"name" => "Enable Advertising:",
	"desc" => "Change this option to enable or disable a spot in footer.",
	"id" => "adv_footer",
	"type" => "select",
		"options" => array("No", "Home page only", "Inner pages only", "Entire site"),
	"default" => "No",
	"tip" => "Enable where the advertising spot to be placed in the footer of your website.", 
	"std" => ""),
	
		
	array( 
	"under_section" => "adv_footer",
	"name" => "Banner position:",
	"desc" => "",
	"id" => "ad_footer_float",
	"type" => "select",
	"options" => array("Center", "Left", "Right"),
	"tip" => "Set the position of the footer ad spot.",
	"std" => ""),
	
	
	array( 
	"under_section" => "adv_footer",
	"name" => "Spot Width Size:",
	"desc" => "Set the size of the spot, i.e.:728 ",
	"id" => "ad_footer_size",
	"type" => "text",
	"default" => "728",
	"tip" => "Set the size of the footer advertising ad, it's 728px by default.",
	"std" => ""),
	
	
	
		
	
		
	array( 
	"under_section" => "adv_footer",
	"name" => "Footer Banner Spot:",
	"desc" => "This can be adsense code, javscript,an image, a text,..",
	"id" => "ad_footer",
	"type" => "textarea",
	"validate" => "html",
	"tip" => "Paste here the url or code of the ad to be placed in the footer.",
	"std" => ""),
	
	
	
	
	
		
	
	  array(
        "section" => "advertising",
        "type" => "heading",
        "title" => "Ad page spots",
        "id" => "adv_page"
    ),
	 
	 
	  array(
        "title" => "Ad spot on top of ad details",
        "under_section" => "adv_page",
        "type" => "small_heading",
    ), 
	
	
	array( 
	"under_section" => "adv_page",
	"name" => "Enable Advertising:",
	"desc" => "Change this option to enable or disable a banner spot in ad page (right-top of the images)",
	"id" => "adv_ad",
	"type" => "select",
	"options" => array("Yes", "No"),
	"default" => "No",
	"tip" => "Enable an advertising spot to be placed in the ad pages.", 
	"std" => ""),
	
	

	
		
	
	array( 
	"under_section" => "adv_page",
	"name" => "Ad page spot:",
	"desc" => "This can be adsense code, javscript,an image, a text,..",
	"tip" => "Paste here the url or code of the ad to be placed in the ad pages.",
	"id" => "ad_ad",
	"type" => "textarea",
	"validate" => "html",
	"std" => ""),
	 
	
	 
	 
	 
	 
	 array(
        "title" => "Ad spot under ad details",
        "under_section" => "adv_page",
        "type" => "small_heading",
    ), 
	 
	 
	 array( 
	"under_section" => "adv_page",
	"name" => "Enable Banner under ad details:",
	"desc" => "Change this option to enable or disable an ad under ad details (ad pages).",
	"id" => "adv_ad_bottom",
	"type" => "select",
	"options" => array("Yes", "No"),
	"default" => "No",
	"tip" => "Enable an advertising spot to be placed under the content of ad pages.", 
	"std" => ""),
	
	array( 
	"under_section" => "adv_page",
	"name" => "Banner 468X60 position:",
	"desc" => "",
	"id" => "ad_ad_bottom_float",
	"type" => "select",
	"options" => array("Center", "Left", "Right"),
	"tip" => "Set the position of the ad spot under ad details.",
	"std" => ""),
	
		
	array( 
	"under_section" => "adv_page",
	"name" => "Spot Width size:",
	"desc" => "Set the size of the spot, i.e. 468.(You do not need to put the px sign.) ",
	"id" => "ad_ad_bottom_size",
	"type" => "text",
	"tip" => "Set the size of the spot under ad details.",
	"std" => ""),
		
	array( 
	"under_section" => "adv_page",
	"name" => "Ad page bottom spot:",
	"desc" => "This can be adsense code, javscript,an image, a text,..",
	"id" => "ad_ad_bottom",
	"type" => "textarea",
	"validate" => "html",
	"tip" => "Paste here the url or code of the ad to be placed under the details of ads.",
	"std" => ""),
	 
	   // array(
        // "title" => "",
        // "under_section" => "adv_page",
        // "type" => "notice",
    // ), 
	 
	 
	 
	 
	array(
        "section" => "advertising",
        "type" => "heading",
        "title" => "Ad listings spot",
        "id" => "adv_listings"
    ),
	 
	  array(
        "title" => "This put advertising spot between ad listings",
        "under_section" => "adv_listings",
        "type" => "small_heading",
    ),
	array( 
	"under_section" => "adv_listings",
	"name" => "Enable Advertising:",
	"desc" => "Change this option to enable or disable ad listings spot.",
	"id" => "adv_listings",
	"type" => "select",
	"options" => array("Yes", "No"),
	"default" => "No",
	"tip" => "Enable an advertising spot to be placed between ad listings.", 
	"std" => ""),
	
	array( 
	"under_section" => "adv_listings",
	"name" => "Ad position (After x ad listing):",
	"desc" => "Choose where you want to put this ad, after what ad position.",
	"id" => "ad_listings_freq",
	"type" => "select",
	"default" => "",
	"options" => array( "0", "1", "2" , "3" , "4", "5", "6" , "7" , "8" , "9" , "10"),
	"tip" => "Choose where you want to put this ad, after what job ad position (0 means before all ad listings).", 
	"std" => ""),
	
	
	array( 
	"under_section" => "adv_listings",
	"name" => "Display the spot on popular ads:",
	"desc" => "By default this spot is embed into the latest ads on home page, use this option to display it in popular ads.",
	"id" => "adv_ad_popular",
	"type" => "select",
	"options" => array("Yes", "No"),
	"default" => "No",
	"tip" => "Enable this spot to be displayed on popular ads in the home page.", 
	"std" => ""),
	
	array( 
	"under_section" => "adv_listings",
	"name" => "Loop listings spot:",
	"desc" => "This can be adsense code, javscript,an image, a text,..",
	"id" => "ad_listings",
	"type" => "textarea",
	"validate" => "html",
	"tip" => "Paste here the url or code of the ad to be placed between ads.",
	"std" => ""),
	 
	  // array(
        // "title" => "",
        // "under_section" => "adv_listings",
        // "type" => "notice",
    // ), 
  	
	
    
      
	  
	   array(
        "type" => "section",
        "icon" => "jobthemes-icon-preference",
        "title" => "Advanced Settings",
        "id" => "advanced",
        "expanded" => "true"
    ),
    
     
	  array(
        "section" => "advanced",
        "type" => "heading",
        "title" => "Settings",
        "id" => "settings"
    ),
    
	
	
	

    
     array(
        "title" => "Grid/list mode:",
        "under_section" => "settings",
        "type" => "small_heading",
    ),
    
    
	 array( 
	"under_section" => "settings", 
	"name" => "Default grid/list mode:",
	"desc" => "Which view is default mode. It's grid by default ",
	"id" => "mode_default",
	"type" => "select",
	"default" => "Grid",
	"options" => array	("Grid","List"),
	"tip" => "Set the default mode of the ad listings.",	
	"std" => ""),
    
    
	
	
	  array(
        "title" => "Extra settings:",
        "under_section" => "settings",
        "type" => "small_heading",
    ),

   
   
    array( 
	"under_section" => "settings", 
	"name" => "Sponsored ribbon:",
	"desc" => "Display the sponsored ribbon on faetured ads.",
	"id" => "enable_featured_style",
	"type" => "select",
	"default" => "Yes",
	"options" => array	("Yes","No"),
	"tip" => "Featued ads are styled and highlighted by default with the sponsored ribbon.",	
	"std" => ""),
	
	
	
	
		array(
    "under_section" => "settings", 
    "type" => "color",
    "name" => "Highlight featured ads:", 
    "id" => "background_featured",
    "display_checkbox_id" => "toggle_checkbox_id",
    "placeholder" => "",
    "desc" => "Set the background color for the featured ads.Clear the input if you want to use the default.",
	 "tip" => "Set the background color for the featured ads.",
    "default" => ""),
	
	
	
	 array(        
        "under_section" => "settings",
	"show_labels" => "false",
        "type" => "radio_image",
	"image_src" => array(
			get_bloginfo('stylesheet_directory')."/admin/"."assets/none.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/sponsored.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/featured.png",
            get_bloginfo('stylesheet_directory')."/admin/"."assets/premium.png",	
			get_bloginfo('stylesheet_directory')."/admin/"."assets/star1.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/star2.png",
			//get_bloginfo('stylesheet_directory')."/admin/"."assets/star3.png",
			get_bloginfo('stylesheet_directory')."/admin/"."assets/star4.png",
			
			),
	"image_size" => array( "40"),
	"name" => "Featured ribbon:",
	"id" => "featured_icons",
	"options" => array("none","sponsored", "featured", "premium", "star1", "star2" , "star4"),	
	"desc" => "Choose an icon for the featured ads",
	"tip" => "Choose an icon for the featured ads",
	"default" => "none" ),
	
	
	
	
	
	
	
	array( 
	"under_section" => "settings", 
	"name" => "Featured ads on top:",
	"desc" => "Select Yes if you want to pull the featured ads on top of the listings.",
	"id" => "enable_featured_top",
	"type" => "select",
	"default" => "Yes",
	"options" => array	("Yes","No"),
	"tip" => "Put featured ads on the top of the listings.",	
	"std" => ""),
	
	
	
		
	array( 
	"under_section" => "settings", 
	"name" => "Sold tag",
	"desc" => "Select Yes if you want to display 'Sold' in the ad listings.",
	"id" => "enable_sold_tag",
	"type" => "select",
	"default" => "Yes",
	"options" => array	("Yes","No"),
	"tip" => "Put sold tag in ad listings.",	
	"std" => ""),
	
	
	

    
    
	array( 
	"under_section" => "settings", 
	"name" => "Sold tag option",
	"desc" => "The default sold tag is 'Sold',You still can change this word anyway.",
	"id" => "enable_sold_name",
	"type" => "text",
	"default" => "Sold",
	"tip" => "If you don't use the english language, Write the word 'Sold' in your own.",	
	"std" => ""),

	
	
	
	
	 array(
        "title" => "Related ads:",
        "under_section" => "settings",
        "type" => "small_heading",
    ),
	
	
	
	
	
	array( 
	"under_section" => "settings", 
	"name" => "Enable related ads",
	"desc" => "Display the related ads in the bottom of the ad page.",
	"id" => "enable_related_ads",
	"type" => "select",
	"default" => "Yes",
	"options" => array	("Yes","No"),
	"tip" => "Select Yes if you want display the related ads.",	
	"std" => ""),
	
	array( 
	"under_section" => "settings", 
	"name" => "Related ads title",
	"desc" => "Set the title of the related ads section.Write anything you want.",
	"id" => "related_ads_title",
	"type" => "text",
	"default" => "Related ads",
	"tip" => "If you don't use the english language, Write the word 'Related ads' in your own.",	
	"std" => ""),
	
	array( 
	"under_section" => "settings", 
	"name" => "Related ads number",
	"desc" => "How many related ads to display.",
	"id" => "related_ads_freq",
	"type" => "select",
	"default" => "Yes",
	"options" => array	("1","2","3","4","5","6","7","8","9","10"),
	"tip" => "Select Yes if you want display the related ads.",	
	"std" => ""),
	
	
	
	
	
	
	
	
	
	 array(
        "title" => "Extra options:",
        "under_section" => "settings",
        "type" => "small_heading",
    ),
	
	  
  
	 array( 
	"under_section" => "settings", 
	"name" => "The search bar hint",
	"desc" => "Set the phrase under the search bar in the header.",
	"id" => "hint_search",
	"type" => "text",
	"default" => "e.g. Real estate, Cars",
	"tip" => "A hint to be displayed under the search bar.",	
	"std" => ""),
	
  
  
);
?>