<?php 
// check-for-http-post_TODO.php
include 'includes/header.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $term = $_POST['term'] ??'';
    echo 'You search for ' . htmlspecialchars($term);
} else { ?>
    <for action="check-for-http-post.php" methot="POST">
    Search for: <input type ="search" name="term" />
    <input type="subimt" value="Search" placeholaer="검색..." />
    </form>
<?php } ?>

<?php include 'includes/footer.php'; ?> 