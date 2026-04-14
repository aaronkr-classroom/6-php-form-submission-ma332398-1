<?php 
// check-for-http-get_TODO.php
include 'includes/header.php'; ?>

<?php
$submitted = $_GET['sent'] ?? '';
if ($submitted == 'search'){
    $term = $_GET['term'] ??'';
    echo 'You search for ' . htmlspecialchars($term);
} else { ?>
    <for action="check-for-http-get.php" methot="GET">
    Search for: <input type ="search" name="term" />
    <input type="submit" name="sent" value="search" />
    </form>
<?php } ?>

<?php include 'includes/footer.php'; ?> 