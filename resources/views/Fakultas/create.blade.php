
<head>
<body>
<link rel = "stylesheet" href="{{asset ('css/create.css') }}">
<form action="{{ route('Fakultas.store') }}" method="POST" >
    
    @csrf
    <table width="2060" border="0" align="right" cellpadding="0" cellspacing="0">
        <tr height="50">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="60%"><font style="color: rgb(134, 156, 252)" size="5"> Formulir Input Data Fakultas </font></td>
                    <h3><a href="{{ route('Fakultas.index') }}">Lihat Data Fakultas</a></h3> 
        </tr>
        <tr height="46">
            <td> </td>
            <td>Nama Fakultas</td>
            <td><input type="text" name="name" size="50" maxlength="50" value="{{ old('name') }}"/></td>
            
        </tr>
        <tr height="46">
            <td> </td>
            <td>Dekan</td>
            <td><input type="text" name="dean" size="50" maxlength="50" value="{{ old('name') }}" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Deskripsi</td>
            <td><input type="text" name="description" size="70" maxlength="255" value="{{ old('name') }}"/> </td>
           
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Submit">   
        </tr>
    </table>
</form>
</div>
</body>
</html>
