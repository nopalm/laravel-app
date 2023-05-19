<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<a href="{{route('barang.create')}}">Add Data</a>
<table>
  <tr>
          <th>Barang</th>
          <th>Kategori</th>
          <th>SKU</th>
          <th>Action</th>
        </tr>
    @forelse($getAllData as $barang)
      <tr>
        <th>{{$barang->name}}</th>
        <th>{{$barang->kategori->kategori_name}}</th>
        <th>{{$barang->SKU}}</th>
        <th><a href="{{route('barang.edit',$barang)}}">Edit</a> <a href="">Delete</a></th>
      </tr>
    @empty
    <tr>
      <td>No Data</td>
    </tr>
    @endforelse
</table>

</body>
</html>

