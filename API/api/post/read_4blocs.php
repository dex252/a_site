<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Post.php';
  $posts_arr2 = array(
      '1' => array(),
      '2'=> array(),
      '3'=> array(),
      '4'=> array()
  );
  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();
  // Instantiate blog post object
  $post = new Post($db);

  // Blog post query
  $result = $post->read1();
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
        'id_ganre' => $id_ganre,
        'name' => $name
      );

      // Push to "data"
      #$posts_arr = []
      array_push($posts_arr, $post_item);
      array_push($posts_arr2['1'], $post_item);
      // array_push($posts_arr['data'], $post_item);
    }

    #echo json_encode($posts_arr2,JSON_UNESCAPED_SLASHES);
    $result = $post->read2();
    // Get row count
    $num = $result->rowCount();

    // Check if any posts
    if($num > 0) {
      // Post array
      $posts_arr = array();
      // $posts_arr['data'] = array();

      while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $post_item2 = array(
          'id_video_type' => $id_video_type,
          'name' => $name
        );

        // Push to "data"
        #$posts_arr = []
        array_push($posts_arr2['2'], $post_item2);
        // array_push($posts_arr['data'], $post_item);
      }
      #echo json_encode($posts_arr,JSON_UNESCAPED_SLASHES);
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
        array_push($posts_arr2['3'], $post_item3);
          // array_push($posts_arr['data'], $post_item);
        }
        #echo json_encode($posts_arr,JSON_UNESCAPED_SLASHES);
        $result = $post->read4();
        // Get row count
        $num = $result->rowCount();

        // Check if any posts
        if($num > 0) {
          // Post array
          $posts_arr = array();
          // $posts_arr['data'] = array();

          while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            extract($row);

            $post_item4 = array(
              'age_limitations_table' => $age_limitations_table,
              'name' => $name
            );

            // Push to "data"
            #$posts_arr = []

        array_push($posts_arr2['4'], $post_item4);
            // array_push($posts_arr['data'], $post_item);
          }
          echo json_encode($posts_arr2,JSON_UNESCAPED_SLASHES);
        }
      }
    }
  }




    // Turn to JSON & output



?>
