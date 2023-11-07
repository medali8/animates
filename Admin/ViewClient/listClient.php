<style>
.leftside {
    height: 100vh;
    width: 100%;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    background: white;
}

 .rightside {
    height: 100vh;
    width: 100%;
    background: #088178bb;
} 

.rightside table{
    width:90% ;
    margin-left: 5%;
    
}
.leftside a{
    text-decoration: none;
    font-size: 22px;
    font-weight: bold;
    color : rgba(0, 0, 0, 0.684);

}

    

    .rightside th{
        padding:12px;
        text-align:left;
        border-bottom: 1px solid #ddd;

    }
    </style>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="dashcss.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
    <div class="row ">

        <div class="col-2 text-center ">
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
                <br><br>
                <h2 style="margin-left : 5%; color : white ; font-weight: bold; font-size: 40px;">List product</h2>
                <br><br><br><br><br>
                <table>
                    <tr id="header">
                        <th>Cin Client</th>
                        <th>Nom Client</th>
                        <th>Prenom Client</th>
                        <th>Adresse</th>
                        <th>Email</th>
                        <th>Numero telephone</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                        foreach($listeClient as $client){ ?>
                        <tr style="font-weight:bold;">
                           <td><?= $client->cin ?></td>
                           <td><?= $client->nom ?></td>
                           <td><?= $client->prenom ?></td>
                           <td><?= $client->adresse ?></td>
                           <td><?= $client->email ?></td>
                           <td><?= $client->numtel ?></td>
                           
                           <td><a href="index.php?controller=clients&action=modif1&id=<?= $client->cin ;?>" style="color : black;"><i class="bi bi-pen"></i></a></td>
                           <td><a href="index.php?controller=clients&action=supprimer&id=<?= $client->cin ;?>" style="color : black;"><i class="bi bi-trash"></i></a></td>
                            </tr>
                            
                          
<?php
                        }
                       
                    ?>
                </table>


            </div>
        </div>
    </div>
  

</body>
</html>