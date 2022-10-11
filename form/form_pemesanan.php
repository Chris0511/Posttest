<html>
<head>
    <title>Form pemesanan</title>
    <style>
        div {padding: 4px};
    </style>
    <link rel="stylesheet" type="text/css" href="D:\Repository\posttest4\style.css">
</head>
<body>
    <form action="proses.php" method="POST">
        <div>
            <tr><td><h2>Silakan masukkan data pesanan :</h2></td></tr>
            <label>Nama :</label> <br>
            <input name="nama" type="text">
        </div>
        <div>
            <label>Jenis Helm :</label> <br> 
            <input name="jenis_helm" value="Helm Fullface" type="radio">Helm Fullface               
            <input name="jenis_helm" value="Helm Openface" type="radio">Helm Openface
            <input name="jenis_helm" value="Helm Offroad" type="radio">Helm Offroad
            <input name="jenis_helm" value="Helm Anak-anak" type="radio">Helm Anak-anak
        </div>
        <div>
            <label>No Hp :</label> <br>
            <input name="no_hp" type="text">
        </div>
        <div>
            <label>Alamat :</label> <br>
            <input name="alamat" type="text">
        </div>
        <div>
            <input type="submit" value="Simpan">
        </div>

        <style type="text/css">

    body {
        font-family: Arial, Helvetica, sans-serif;
        background: #e6e6e6;
        padding: 25px;
        border-style: solid;
        border-width: 1px;
        margin:0;
        text-align: left;
        border-color: blue;
        margin: 5px 5px 5px 5px;
        background-color: white;
        color: black;
        font-size: 25px;
    }

    label{
        background-color: white;
        color: black;
        font-size: 12pt;
        padding: 0.5em;
        border-width: 1px;
        margin: 5px 5px 5px 5px;
        border-style: solid;
        border-color: red;
        
    }

    input {
        background-color: gray;
        color: black;
        font-size: 12pt;
        padding: 0.5em;
        border-width: 1px;
        margin: 5px 5px 5px 5px;
        border-style: solid;
        border-color: red;
           

    }

    input .radio{
        background-color: white;
        color: black;
        font-size: 12pt;
        padding: 0.5em;
        border-width: 1px;
        margin: 5px 5px 5px 5px;
        border-style: solid;
        border-color: red;  

    }

    </style>
    </form>
    
</body>
</html>


