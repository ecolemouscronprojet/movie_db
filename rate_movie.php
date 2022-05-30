<?php
require_once('connexion.php');
$movieId = $_GET['id'] ?? null;

if ($movieId != null) :
    $query = $db->query('SELECT * from rate where movie_id=' . $movieId);
    $rates = $query->fetchAll(PDO::FETCH_ASSOC);
?>
    <h3>Notes</h3>
    <a href="movie_rate.php?movie_id=<?= $movieId ?>" class="btn btn-success btn-sm mt-3 mb-3">Ajouter</a>
    
    <ol class="list-group list-group-numbered">
        <?php foreach($rates as $r): ?>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                <?= $r['comment']?><br>
                </div>
                <span class="badge bg-primary rounded-pill"> <?= $r['rating'] . '/5' ?></span>
            </li>
        <?php endforeach; ?>
    </ol> 

<?php
endif
?>