<?= $title;?>
<ul class="list-group">
<?php foreach($categories as $category ):?>
    <li class="list-group-item">
    <a href="<?php echo site_url('index.php/categories/posts/'.$category['id'])?>"><?php echo $category['name']?> </a>
    </li>
<?php endforeach;?>

</ul>