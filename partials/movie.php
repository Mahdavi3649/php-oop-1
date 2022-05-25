
        <div class="row mt-5">
    
            <?php foreach($movies as $movie) { ?>
    
                    <div class="col-3">
                        <div class="card" style="width: 13rem;">
                            <img src="<?php echo $movie->getImage(); ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $movie->getTitle(); ?></h5>
                                    <p ><?php echo $movie->getGenre(); ?></p>
                                    <h6 ><?php echo $movie->getDirecter(); ?></h6>
                                    <p><?php echo $movie->getYear(); ?></p>
                                </div>
                        </div>
                    </div>
    
                <?php } ?>
    
        </div>
    