
@extends('layouts.userProfile')
@section('content')
<head>
<link rel="stylesheet" href="/css/userIncentive.css">
<style>
  div .card-body{
    height: 300px;
    background-color: #F0D7A8;
  }

  table, th, td {
  padding-bottom: 40px;
  padding-top: 10px;
  font-size: 25px;
}

p{
  color: #1659C7
}

.button{
  position: absolute; right: 0;
  background-color: #3C79F5;
  color: white;
  padding: 5px 15px;
  border: none;
  border-radius: 25px;
  cursor: pointer;
}

.button:hover{
  background-color: #819CCE;
}
  
</style>
</head>

    <div class="container-fluid py-4" >
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                <div class="card-header pb-0" style="background-color: #819CCE";>
                    <h6>PERMOHONAN INSENTIF PASANGAN KHAS</h6>
                </div>
            </div>
        </div>
    </div>

    <form action="/action_page.php">
      <div class="card-body">
        
          <table>
                <tbody>
                <tr class="jo" >
                    <td>No. K/P PEMOHON</td>
                    <td>:  {{ auth()->user()->ic }}</td>
                </tr>
                
                <tr class="jo">
                    <td>
                      <label for="Gaji">GAJI PENUH*</label>
                    </td>
                    <td>:
                      <input type="text" id="Gaji" name="gajipenuh">
                    </td>
                </tr>
                
                <tr class="jo">
                    <td> 
                      <label for="Daerah">DAERAH*</label>
                    </td>
                    <td>:
                      <select id="Daerah" name="daerah">
                        <option value="pekan">PEKAN</option>
                        <option value="kuantan">KUANTAN</option>
                        <option value="temerloh">TEMERLOH</option>
                      </select>
                    </td>
                </tr>
                </tbody>
            </table>
      </div>
      <p>
      Muat turun borang: <br>
      <a href="/download/BorangInsentif.pdf">Borang Insentif Khas Pasangan Pengantin</a>
     </p>

      <div class="button">
        <a href="{{ route('user.userUpload') }}" class="btn">Seterusnya</a>
      </div>
      
    </form>



@endsection
