<?php

function make_gallery($folder_name) {
    $dirname = "images/$folder_name/";
    $images = glob($dirname."*.jpg");
  
    foreach($images as $image) {  // Changed variable name to avoid confusion
        // Initialize title with a default value
        $title = basename($image); // Default to the filename if no title is found
        
        // Get image properties...
        $exif = exif_read_data($image, 0, true);
        
        if ($exif !== false) {  // Check if EXIF data was read successfully
            foreach ($exif as $key => $section) {
                foreach ($section as $name => $val) {
                    if($key == 'IFD0' && $name == "Title") {
                        // strips 'special' characters, allows a-z, spaces, dashes and round brackets
                        $title = preg_replace('/[^A-Za-z0-9\- ()]/','',$val);
                        break 2; // Exit both foreach loops once we find the title
                    }
                }
            }
        }
        ?>
        
        <div class="responsive-gallery">
            <div class="gallery">
                <a href="<?php echo $image; ?>" class="big">
                    <img class="responsive" src="<?php echo $image; ?>" alt="<?php echo htmlspecialchars($title); ?>" title="<?php echo htmlspecialchars($title); ?>" />
                </a>
            </div>
        </div>
        
        <?php  
    }
}
?>