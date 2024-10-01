<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    margin: 0;
    padding: 0;
    position: relative;
    }
    body{
    background-color: #F3F8FF;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 40px;
    }
    form{
    background-color: #F3F8FF;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    padding: 40px;
    border: 2px solid #8d5f7be9;
    border-radius: 10px;
    position: relative;
    }
    div{
    width: 240px;
    padding-bottom: 20px;
    }
    h2{
        color: black;
    }
    hr {
        border: 0;
        height: 2px;
        background: #ee3893e9;
    }
    .title{
        color: black;
        font-size: 20px;
    }
    .data{
        color: black;
        font-size: 20px;
        padding-left: 10px;
    }
    tr td:first-child{
        text-align: right;
        font-weight: bold;
    }
    td{
        padding: 5px 0;
    }
    .formInput{
        width: 100%;
        height: 32px;
        border-radius: 5px;
        border: 1px solid black;
        margin: 8px 0 6px 0;
    }
    p{
        font-size: 12px;
        color: black;
    }
    div.checkBox{
        padding: 8px 0;
        font-size: 12px;
        display: flex;
        align-items: center;
        width: 240px;
    }
    .checkmark {
        position: relative;
        height: 14px;
        width: 14px;
        background-color: #F3F8FF;
        border-radius: 4px;
        border: 1px solid #d6377f;
        display: inline-block;
        vertical-align: middle;
        cursor: pointer;
    }
    input[type="checkbox"]:checked + .checkmark {
        background-color: #d6377f;
    }
    
    .checkmark::after {
        content: "";
        position: absolute;
        display: none;
    }
    input[type="checkbox"]:checked + .checkmark::after {
        display: block;
    }
    .checkmark::after {
        left: 5px;
        top: 2px;
        width: 3px;
        height: 7px;
        border: solid #F3F8FF;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }
    input[type="checkbox"] + .checkmark {
        cursor: pointer;
    }
    input[type="checkbox"]{
        cursor: pointer;
        opacity: 1;
        position: absolute;
        z-index: 1;
        opacity: 0;
    }
    input:focus, textarea:focus{
        outline: solid #d6377f;
    }
    label.check{
        font-size: 13px;
        padding-left: 10px;
        color: black;
        cursor: pointer;
    }
    #submitBtn{
        color: #F3F8FF;
        grid-column: span 2;
        height: 36px;
        background-color: #d6377f;
        border: none;
        border-radius: 10px;
        font-weight: bold;
    }
    #submitBtn:hover{
        background-color: #ea4891;
        transition: 0.4s;
    }
    input[type="text"], input[type="number"], input[type="mail"] {
        padding: 5px;
    }
    button:hover{
        background-color: #ea4891;
        transition: 0.4s;
    }
    .type{
        display: flex;
        flex-direction: column;
    }
    .type{
        height: 150px;
    }
    .type textarea{
        padding: 10px;
    }
</style>
<body>
    <?php require 'Bai3function.php';?>
    <?php if ($isSubmitted): ?>
        <div style="display: flex; justify-content: center; align-items: center; height: 100vh; padding-bottom:0">
            <form style="display: flex; flex-direction:column;">
                <h2 style="text-align: center;">Information</h2>
                <hr  style="width: calc(100% + 80px); transform: translate(-70px); margin: 30px;">
                <table style="width: 100%;">
                    <tr>
                        <td>Name: </td>
                        <td><?php echo $firstname." ". $lastname; ?></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <td>Invoice ID: </td>
                        <td><?php echo $id ?></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top;">Pay for: </td>
                        <td><?php echo $pay ?></td>
                    </tr>
                    <tr>
                        <td>Message: </td>
                        <td><?php echo $type ?></td>
                    </tr>
                    <tr>
                        <td colspan= "2" style="text-align: center;padding:0">
                            <img src="<?php echo $upload?>" alt="" style = "width:300px">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    <?php else: ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  enctype="multipart/form-data"> 
        <h2 style="grid-column: span 2; text-align: center;">Payment Receipt Upload Form</h2>
        <hr  style="grid-column: span 2; width: calc(100% + 80px); transform: translate(-70px); margin: 30px;">
        <label for="firstName" class="title" style="grid-column: span 2;">Name</label>
        <div>
            <input type="text" id="firstName" name="firstName" class="formInput" 
                value="<?php echo $firstname?>">
            <?php echo $firstnameErr?>
        </div>
        <div>
            <input type="text" id="lastName" name="lastName" class="formInput"
                value="<?php echo $lastname?>">
            <?php echo $lastnameErr?>
        </div>
        <div>
            <label for="mail" class="title">Mail</label>
            <input type="mail" id="mail" name="email" class="formInput"
                value="<?php echo $email?>">
            <?php echo $emailErr?>
        </div>
        <div>
            <label for="invoiceId" class="title">Invoice ID</label>
            <input type="text" id="invoiceId" name="invoiceId" class="formInput"
                value="<?php echo $id?>">
            <?php echo $idErr?>
        </div>
        <div style="grid-column: span 2; width: 100%; padding-bottom: 20px;">
            <label class="title" style="margin-bottom: 10px; display: block;">Pay For</label>
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); width: 550px; padding: 0;">
                <div class="checkBox">
                    <input type="checkbox" id="35kCategory" name="pay_for[]" value="35K Category"
                        <?php if (isset($_POST['pay_for']) && in_array("35K Category", $_POST['pay_for'])) echo "checked"; ?>>
                        <span class="checkmark"></span>
                    <label class="check" for="35kCategory">35K Category</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" id="15kCategory" name="pay_for[]" value="15K Category"
                        <?php if (isset($_POST['pay_for']) && in_array("15K Category", $_POST['pay_for'])) echo "checked"; ?>>
                        <span class="checkmark"></span>
                    <label class="check" for="15kCategory">15K Category</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" id="55kCategory" name="pay_for[]" value="55K Category"
                        <?php if (isset($_POST['pay_for']) && in_array("55K Category", $_POST['pay_for'])) echo "checked"; ?>>
                        <span class="checkmark"></span>
                    <label class="check" for="55kCategory">55K Category</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" id="75kCategory" name="pay_for[]" value="75K Category"
                        <?php if (isset($_POST['pay_for']) && in_array("75K Category", $_POST['pay_for'])) echo "checked"; ?>>
                        <span class="checkmark"></span>
                    <label class="check" for="75kCategory">75K Category</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" id="116kCategory" name="pay_for[]" value="116K Category"
                        <?php if (isset($_POST['pay_for']) && in_array("116K Category", $_POST['pay_for'])) echo "checked"; ?>>
                        <span class="checkmark"></span>
                    <label class="check" for="116kCategory">116K Category</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" id="shuttleTwoWays" name="pay_for[]" value="Shuttle Two Ways"
                        <?php if (isset($_POST['pay_for']) && in_array("Shuttle Two Ways", $_POST['pay_for'])) echo "checked"; ?>>
                        <span class="checkmark"></span>
                    <label class="check" for="shuttleTwoWays">Shuttle Two Ways</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" id="shuttleOneWays" name="pay_for[]" value="Shuttle One Way"
                        <?php if (isset($_POST['pay_for']) && in_array("Shuttle One Way", $_POST['pay_for'])) echo "checked"; ?>>
                        <span class="checkmark"></span>
                    <label class="check" for="shuttleOneWays">Shuttle One Way</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" id="compressportTShirtMerchandise" name="pay_for[]" value="Compressport T-Shirt Merchandise"
                        <?php if (isset($_POST['pay_for']) && in_array("Compressport T-Shirt Merchandise", $_POST['pay_for'])) echo "checked"; ?>>
                        <span class="checkmark"></span>
                    <label class="check" for="compressportTShirtMerchandise">Compressport T-Shirt Merchandise</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" id="trainingCapMerchandise" name="pay_for[]" value="Training Cap Merchandise"
                        <?php if (isset($_POST['pay_for']) && in_array("Training Cap Merchandise", $_POST['pay_for'])) echo "checked"; ?>>
                        <span class="checkmark"></span>
                    <label class="check" for="trainingCapMerchandise">Training Cap Merchandise</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" id="bufMerchandise" name="pay_for[]" value="Buf Merchandise"
                        <?php if (isset($_POST['pay_for']) && in_array("Buf Merchandise", $_POST['pay_for'])) echo "checked"; ?>>
                        <span class="checkmark"></span>
                    <label class="check" for="bufMerchandise">Buf Merchandise</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" id="other" name="pay_for[]" value="Other"
                        <?php if (isset($_POST['pay_for']) && in_array("Other", $_POST['pay_for'])) echo "checked"; ?>>
                        <span class="checkmark"></span>
                    <label class="check" for="other">Other</label>
                </div>
            </div>
            <?php echo $payErr;?>
        </div>
        <div style="grid-column: span 2; width: 100%; padding-bottom: 20px;">
            <?php if (!empty($upload)): ?>
            <?php echo $upload; ?>
            <input type="hidden" name="fileUploaded" value="<?php echo $upload; ?>">
            <?php else: ?>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php endif; ?>
            <?php echo $uploadErr; ?>
        </div>
        <div style="grid-column: span 2; width: 100%; padding-bottom: 20px;" class="type">
            <label for="infor" class="title">Additional Information</label>
            <textarea class="type" name="content" placeholder="Type here..."><?php echo $type?></textarea>
            <?php echo $typeErr; ?>
        </div>
        <input type="submit" id="submitBtn" name="submit" value="Submit">
        <?php echo $mess; ?> 
    </form>
    <?php endif; ?>
</body>
</html>