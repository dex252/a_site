<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // Blog post query

  $result = $post->read( $post->ganre = isset($_GET['ganre']) ? $_GET['ganre'] : 0,
						 $post->type = isset($_GET['type']) ? $_GET['type'] : 0,
						 $post->status = isset($_GET['status']) ? $_GET['status'] : 0,
						 $post->year1 = isset($_GET['year1']) ? $_GET['year1'] : 0,
						 $post->year2 = isset($_GET['year2']) ? $_GET['year2'] : 9999,
						 $post->name_anime = isset($_GET['name_anime']) ? $_GET['name_anime'] : "");
  // Get row count
  $num = $result->rowCount();

  // Check if any posts
  if($num > 0) {
    // Post array
    $posts_arr = array();
    // $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $post_item = array(
        'id_anime' => $id_anime,
		'id_ganre' => $id_ganre,
		'id_video_type' => $id_video_type,
		'id_exit_status' => $id_exit_status,
		'name' => $name,
		'year' => $year,
		'author' => $author,
		'rating' => $rating,
		'num_series' => $num_series,
		'discription' => $discription,
        'img_link' => $img_link
      );

      // Push to "data"
      array_push($posts_arr, $post_item);
      // array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSON & output
    echo json_encode($posts_arr,JSON_UNESCAPED_SLASHES);


  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Posts Found')
    );
  }
?>
