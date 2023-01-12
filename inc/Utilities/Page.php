<?php

class Page {
    public static function uploadJson() {?>
        <h3>Please select an JSON file to upload</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="uploadJson">
            <input type="submit" name="jsonSubmit" value="SUBMIT">
        </form>
        <?php        
    }

    public static function uploadXML() {?>
        <h3>Please select an XML file to upload</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="uploadXML">
            <input type="submit" name="XMLSubmit" value="SUBMIT">
        </form>
        <?php        
    }

}