<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
</head>
<body>
    <form action="login.php" method="POST">
        <fieldset>
        <legend>Add Data Barang</legend>
        <p>
            <label>Nama Barang :</label>
            <input type="text" name="f_barang"/>
        </p>
        <p>
            <label>Kategori :</label>
            <select name="f_kategori">
                @foreach ($getAllKategori as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->kategori_name}}</option>
                @endforeach
            </select>
        </p>
        <p>
            <label>SKU :</label>
            <input type="text" name="f_sku" />
        </p>
        
        <p>
            <input type="submit" name="submit" value="Submit" />
        </p>
        </fieldset>
    </form>
</body>
</html>