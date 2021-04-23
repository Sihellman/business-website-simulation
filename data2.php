<?php
/** data.php --- Contains several dummy datasets, which can be provided as JSON
 *               in response to XHR calls.  Accepts the following arguments via
 *               GET or POST:
 *
 *  @source --- Specify which dataset to use.  Accepts
 *              'recipes', 'employees', 'products', or 'blog_posts'
 *              (default recipes).
 *  @filter_col --- Specify an object column on which to filter the dataset (default null).
 *  @filter_val --- Specify the value on which to filter the chosen column.
 *                  For int columns, @filter_col must match @filter_val; for
 *                  strings, it will match so long as @filter_col contains
 *                  @filter_val.
 *
 */


$recipes = array(
	(object) array('id' => 1,
		'title' => 'Chicken',
		'ingredients' => 'Raw Chicken',
		'directions' => 'Squeeze the chicken',
		'image' => 'https://th.bing.com/th/id/OIP.NDwcBgGwyeomxt6-nUb8IgHaEl?pid=Api&rs=1'
	),
	(object) array('id' => 2,
		'title' => 'Eggs',
		'ingredients' => 'Raw Eggs',
		'directions' => 'Squeeze the egg',
		'image' => 'http://swansonhealthcenter.com/wp-content/uploads/2011/07/Egg.jpg'
	),
	(object) array('id' => 3,
		'title' => 'Bread',
		'ingredients' => 'Wheat',
		'directions' => 'Do stuff',
		'image' => 'https://cdn.agdaily.com/wp-content/uploads/2017/07/bg-wheat-002.jpg'
	)
);


$employees = array(
	(object) array('id' => 1,
		'name' => 'Lawrence',
		
		'email' => 'lawrence_smith@example.com',
		'description' => ' Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
        sed diam nonummy nibh euismod tincidunt ut laoreet
		dolore magna aliquam erat volutpat.',
		'image' => 'rabbit.jpg'
	),
	(object) array('id' => 2,
		'name' => 'Meredith',
		
        'email' => 'meredith_exampleton@example.com',

		'description' => ' Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
        sed diam nonummy nibh euismod tincidunt ut laoreet
		dolore magna aliquam erat volutpat.',
		'image' => 'rabbit.jpg'
		
	),
	(object) array('id' => 3,
		'name' => 'Stephen',
		
        'email' => 'stephen_wheeler@example.com',

		'description' => ' Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
        sed diam nonummy nibh euismod tincidunt ut laoreet
		dolore magna aliquam erat volutpat.',
		'image' => 'rabbit.jpg'
		
	),

);
$teamb = array(
	(object) array('id' => 1,
		'name' => 'the one',
		
		'email' => 'lawrence_smith@example.com',
		'description' => ' Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
        sed diam nonummy nibh euismod tincidunt ut laoreet
		dolore magna aliquam erat volutpat.',
		'image' => 'teddy.jpg'
	),
	(object) array('id' => 2,
		'name' => 'two',
		
        'email' => 'meredith_exampleton@example.com',

		'description' => ' Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
        sed diam nonummy nibh euismod tincidunt ut laoreet
        dolore magna aliquam erat volutpat.',
		'image' => 'teddy.jpg'
	),
	(object) array('id' => 3,
		'name' => 'three',
		
        'email' => 'stephen_wheeler@example.com',

		'description' => ' Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
        sed diam nonummy nibh euismod tincidunt ut laoreet
		dolore magna aliquam erat volutpat.',
		'image' => 'teddy.jpg'
		
	),

);


$products = array(
	(object) array('id' => 1,
		'name' => 'Hammer',
		'description' => 'Hits things',
		'price' => '12.00'
	),
	(object) array('id' => 2,
		'name' => 'Chisel',
		'description' => 'Chisels things',
		'price' => '24.00'
	),
	(object) array('id' => 3,
		'name' => 'Screwdriver',
		'description' => 'Screws things',
		'price' => '6.50'
	),
	(object) array('id' => 4,
		'name' => 'Drill',
		'description' => 'Drills things',
		'price' => '49.99'
	),
	(object) array('id' => 5,
		'name' => 'Shoe',
		'description' => 'Only one?',
		'price' => '0.10'
	)
);


$blog_posts = array(
	(object) array('id' => 1,
		'title' => 'Test Post',
		'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a scelerisque eros, vel faucibus odio. Praesent interdum est nec gravida tempus. Aenean dui ligula, semper consectetur ultricies eget, volutpat id nunc. Duis condimentum ante neque, eget porta tortor accumsan vitae. Pellentesque feugiat est vitae erat fringilla, mattis tincidunt nunc faucibus. Integer laoreet ac elit a aliquet. Suspendisse potenti. Etiam vitae mattis augue. ',
		'author' => 'Some Guy',
		'date' => '1/1/1901'
	),
	(object) array('id' => 2,
		'title' => 'Some Opinion',
		'content' => ' Pellentesque a dolor lectus. Nulla ut fermentum diam, at elementum purus. Aenean vel turpis sed augue tristique ultrices at id sem. Nam quis luctus massa. Aenean at rhoncus augue. Sed malesuada scelerisque scelerisque. Cras maximus ante in tortor efficitur vulputate. Donec eleifend est a lacus feugiat lobortis. Nunc sed diam fringilla, eleifend eros ac, semper sem. Mauris eget malesuada tortor. Suspendisse sagittis eu orci ut pretium. Proin aliquet convallis turpis, id varius nunc suscipit id. Nunc eu leo in tortor placerat convallis laoreet ac lacus. Aenean consequat varius neque nec viverra. Mauris in scelerisque nibh, nec interdum turpis. Nulla non malesuada lorem. ',
		'author' => 'Some Guy',
		'date' => '1/1/2001'
	),
	(object) array('id' => 3,
		'title' => 'Fiddlesticks',
		'content' => ' Nulla quis mattis ex. Integer tincidunt feugiat elit quis pellentesque. Sed ut nulla bibendum purus varius consequat. Pellentesque eget porttitor velit, sit amet placerat mauris. Aliquam imperdiet mi et justo elementum consequat. Nullam placerat sodales nibh, eu commodo leo placerat nec. Suspendisse potenti. ',
		'author' => 'Some Guy',
		'date' => '12/1/2001'
	),
	(object) array('id' => 4,
		'title' => 'JavaScript and Pie',
		'content' => '

	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tellus ante, vestibulum nec ultricies et, ultricies a augue. Quisque ac diam egestas lacus ultrices molestie id a dolor. Nulla sed rhoncus sapien, eget luctus ante. Mauris fringilla eleifend nunc, vitae viverra massa scelerisque non. Aliquam gravida tincidunt leo ut gravida. Nam lectus ligula, vehicula sit amet cursus eu, rutrum ut felis. Vivamus bibendum gravida felis, vel ultrices turpis sollicitudin in. Proin justo nibh, congue et pulvinar a, ornare sit amet erat. Aliquam pellentesque ante sodales, malesuada mi in, porta tellus. Aliquam sed massa porta, consectetur mi a, tempus ligula. Maecenas quis turpis sit amet sapien dapibus finibus. In ornare ultricies dui id lacinia. In metus erat, facilisis et rutrum sit amet, ullamcorper nec turpis. Donec at pretium ex, non mollis mauris. Curabitur et libero non metus fringilla congue ut vitae augue.

	Nullam fringilla tellus eu nulla semper, dictum viverra ligula tempor. Suspendisse varius gravida odio ac iaculis. Maecenas tempor auctor lectus. Mauris convallis faucibus lacus ut tristique. Nam quis nunc sit amet ante porttitor consectetur sed sed turpis. Phasellus porta tristique vulputate. Pellentesque rutrum sed odio eget pulvinar. Donec pharetra felis egestas, dignissim dui et, condimentum massa.

	Integer lacinia porta aliquam. Integer a arcu iaculis, cursus orci pulvinar, bibendum turpis. Pellentesque pellentesque, erat quis fermentum cursus, tellus nisi tempor odio, et semper lorem ipsum non tellus. Nulla ut consequat libero, a euismod lorem. Integer pulvinar, mi eget mattis laoreet, tortor metus lacinia sapien, quis efficitur tortor dui nec diam. Nullam quis aliquam felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis congue augue. Pellentesque laoreet erat mauris, non sagittis dolor blandit ac. Cras ac orci massa. Curabitur mauris purus, commodo id tempus at, pulvinar sed quam. Vivamus volutpat nibh eget enim tempus, eget condimentum velit congue. Sed imperdiet eu enim eu aliquam. Curabitur vulputate pulvinar arcu ut venenatis. Phasellus ullamcorper viverra aliquam.

	Integer eget turpis elit. Maecenas eu massa blandit, molestie odio id, mollis purus. Vestibulum pulvinar et metus eget convallis. Mauris congue, justo nec convallis tempus, tortor est commodo arcu, at volutpat ipsum arcu sit amet eros. Quisque sit amet urna sem. Duis vehicula, urna nec egestas accumsan, sem elit rutrum urna, vitae ullamcorper nulla tellus vel ante. Nam tellus urna, lacinia ac felis nec, commodo pharetra sapien. Fusce sit amet eros ornare, ornare orci vel, auctor libero. Pellentesque interdum aliquet elit ut efficitur. Mauris nec laoreet sem, vehicula lacinia sapien. Donec at erat eu purus pulvinar facilisis. Morbi et luctus nisi. Praesent dolor nibh, pretium at urna ut, lacinia condimentum tortor. Nulla in leo iaculis, aliquet est sed, elementum odio.

	Nullam interdum sapien odio, ut consequat velit luctus et. Quisque urna quam, malesuada in nibh eget, euismod euismod nunc. Praesent bibendum hendrerit hendrerit. Quisque imperdiet elit varius, semper nibh quis, fringilla velit. Aenean congue consectetur ante. Vivamus lacinia odio in ligula molestie lacinia. Aenean imperdiet dictum odio, nec sagittis orci. Sed quis aliquam nulla. Integer consectetur feugiat nunc, a suscipit ipsum dictum dapibus. Nulla id elit sagittis, euismod leo ac, sodales urna. Sed eros sem, aliquam vitae ipsum vitae, laoreet tincidunt odio. Etiam convallis eros in orci imperdiet accumsan.

	Ut eget orci vitae massa scelerisque mollis. Proin ut nisi interdum, mollis enim sit amet, rutrum arcu. Nunc sollicitudin dignissim ultricies. Phasellus rutrum sapien ut sollicitudin lacinia. Nullam feugiat libero quam, sit amet mattis dui dapibus in. Vestibulum nec consectetur lorem. Morbi eget lobortis nisi. Curabitur congue pellentesque lorem. Aenean eu dolor et quam laoreet tempor at eu nibh. Praesent massa mi, cursus ac sollicitudin a, dapibus a metus. Praesent ante leo, tristique sed lorem eu, rutrum dignissim lectus. Morbi gravida, enim quis commodo faucibus, magna turpis hendrerit metus, at pharetra eros quam sit amet dui. ',
		'author' => 'Some Guy\'s Wife',
		'date' => '10/10/2020'
	)
);



/*
 * Checks both POST and GET for the named key, otherwise returns the provided
 *  default (or null).
 */
function rget($key, $default=null){
	return isset($_POST[$key]) ? $_POST[$key] : (isset($_GET[$key])  ? $_GET[$key]  : $default);
}


function get_filtered($data, $filter_col, $filter_val){
	$results = array();

	foreach( $data as $obj ){
		// If row lacks the filter column, skip it
		if( !isset($obj->$filter_col) ) continue;

		// If row column, doesn't contain the filter value, skip it
		if( is_int($obj->$filter_col) && $obj->$filter_col != $filter_val ){
			continue;
		}else if( strstr($obj->$filter_col, $filter_val) === false ){
			continue;
		}

		$results[] = $obj;
	}

	return $results;
}


function format_json($data){
	$json_str = '';

	$json_str .= "<pre>";
	$json_str .= "[\n";
	foreach( $data as $obj ){
		$obj_vars = get_object_vars($obj);

		$json_str .= "\t{\n";
		foreach( $obj_vars as $k => $v ){
			$json_str .= "\t\t'$k': '$v',\n";
		}
		$json_str .= "\t},\n";
	}
	$json_str .= "]\n";
	$json_str .= "</pre>";

	return $json_str;
}



////
//  1. Get data source
////
$source = rget('source', 'blog_posts');
$data = null;
if( $source ){
	switch( $source ){
	case 'recipes':
		$data = $recipes;
		break;

	case 'employees':
		$data = $employees;
		break;

	case 'products':
		$data = $products;
		break;

	case 'blog_posts':
		$data = $blog_posts;
		break;
	case 'teamb':	
		$data = $teamb;
		break;
	}
	
}

// If no source selected, display error and abort
if( !$data ){
	echo "Error: Invalid source selected.";
	exit();
}



////
//  2. Apply data filter, if provided
////
if( isset($_POST['apply_filter']) ){
	$filter_col = rget('filter_col');
	$filter_val = rget('filter_val');

	if( $filter_col && $filter_val ){
		$data = get_filtered($data, $filter);
	}
}



#echo "<pre>".print_r($_REQUEST,1)."</pre>";
#echo "<p>".gettype(rget('csv'))."</p>";
#exit();



////
//  3. Print the data as JSON
////
$csv = rget('csv');
if( isset($csv) ){
	echo format_json($data);
}else{
	$output = json_encode($data);
	echo $output;
}



?>
