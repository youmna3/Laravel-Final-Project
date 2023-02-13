@php
    $rating = $product['rating'];
    $fullStars = floor($product['rating']);
    //$halfStars = $product['rating'] - $fullStars;
    $emptyStars = 5;
    for ($i = 0; $i < $fullStars; $i++) {
        echo '<small class="fa fa-star text-primary mr-1"></small>';
        $emptyStars--;
    }
    
    if ($rating > $fullStars) {
        echo '<small class="fa fa-star-half-alt text-primary mr-1"></small>';
        $emptyStars--;
    }
    if ($emptyStars != 0) {
        for ($z = $emptyStars; $z--; ) {
            echo '<small class="far fa-star text-primary mr-1"></small>';
            $emptyStars--;
        }
    }
@endphp
<small>(<?= $product['rating_count'] ?>)</small>
