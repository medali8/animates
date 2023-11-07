<style>
.leftside a{
    text-decoration: none;
    font-size: 22px;
    font-weight: bold;
    color : rgba(0, 0, 0, 0.684);
    

}


.rightside {
    height: 100vh;
    width: 100%;
    background: #088178bb;
}form input, form button {
    width: 200px;
    height: 35px;
    color: #fff;
    background: #0000006b;
    outline: none;
    border: none;
    border-radius: 15px;
    padding: 10px;
    margin: 5px 0px;
}
form {
    margin-left: 15%;
    background-color:rgba(0, 0, 0, 0.264);
    width :70%;
    border-radius: 30px;
    
}

label {
    font-size: 18px;
    font-weight: bold;
    color : white ;
}
</style>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="logdash.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-2 text-center">
                <div class="leftside">
                    <br><br>
                    <h1 style="margin-left:4%;font-style:italic;font-weight:bold;  ">Anim<span style="color :#088178;text-decoration-line: underline;">ates</span></h1>
                    <br><br><br><br><br><br><br><br>
                    <a href="index.php?controller=product&action=ajout1">Add Product</a><br><br>
                        <a href="index.php?controller=product&action=lister">List Products</a><br><br>
                        <a href="index.php?controller=commande&action=lister">List commandes</a><br><br>
                        <a href="index.php?controller=categorie&action=ajout1">Add Categorie</a><br><br>
                        <a href="index.php?controller=categorie&action=lister">List Categories</a><br><br>
                        <a href="index.php?controller=clients&action=lister">List Clients</a>
                </div>

            </div>
            <div class="col-10">
                <div class="rightside">
                    <div class="singin">
                        <br><br>
                        <h1 class="text-start mx-5" style="color:white">Add Product</h1>
                        <br>
                        <form class="text-center" action="index.php?controller=product&action=ajout2" method=POST>
                            <label for="un"> libelle product </label><br>
                            <input type="text" id="lib" name="lib" required="">
                            <br>
                            <label for="un"> Price product </label><br>
                            <input type="text" id="pp" name="pp" required="">
                            <br>
                            <label for="un"> Quantite stock </label><br>
                            <input type="text" id="qs" name="qs" required="">
                            <br>
                            <label for="un"> Url picture </label><br>
                            <input type="text" id="up" name="up" required="">
                           <br>
                            <label for="cat"> Categorie</label><br>
                            <select name="cat" style="width: 200px;height: 35px;color: #fff;background: #0000006b;outline: none;border: none;border-radius: 15px;">
                                <option value="2">Hoodies</option>
                                <option value="3">Neckalce</option>
                                <option value="4">Strickers</option>
                                <option value="5">Figurines</option>

                                
                            </select>
                            <br>
                            
                           <br><br><br>
                            <button>Ajouter</button>
                            <br><br>

                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>

</body>
</html>