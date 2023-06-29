<?php
$isbn = $_GET['isbn'];

if (!empty($isbn)) {
  $url = 'https://openlibrary.org/isbn/' . $isbn . '.json';

  $response = file_get_contents($url);

  if ($response !== false) {
    $book = json_decode($response, true);

    if (isset($book['title'])) {
      $title = $book['title'];
      $authors = isset($book['authors']) ? implode(', ', array_column($book['authors'], 'name')) : '';
      $publisher = isset($book['publishers'][0]) ? $book['publishers'][0] : '';
      $pageCount = isset($book['number_of_pages']) ? $book['number_of_pages'] : '';
      $description = isset($book['description']) ? $book['description']['value'] : '';
      $coverUrl = isset($book['cover']['large']) ? $book['cover']['large'] : '';

      header('Location: api.php?isbn=' . urlencode($isbn) . '&title=' . urlencode($title) . '&authors=' . urlencode($authors) . '&publisher=' . urlencode($publisher) . '&pageCount=' . urlencode($pageCount) . '&description=' . urlencode($description) . '&coverUrl=' . urlencode($coverUrl));
      exit();
    }
  }
}

header('Location: api.php?error=true');
exit();
?>
