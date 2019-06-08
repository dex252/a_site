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
  $result = $post->read3();
  // Get row count
  $num = $result->rowCount();

  // Check if any posts
  if($num > 0) {
    // Post array
    $posts_arr = array();
    // $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $post_item3 = array(
        'id_exit_status' => $id_exit_status,
        'name' => $name
      );

      // Push to "data"
      #$posts_arr = []
    array_push($posts_arr, $post_item3);
      // array_push($posts_arr['data'], $post_item);
    }
    echo json_encode($posts_arr,JSON_UNESCAPED_SLASHES);
  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Posts Found')
    );
  }


?>
