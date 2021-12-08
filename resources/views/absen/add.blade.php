
   @extends('layout.bahagia')

   @section('title', 'Menambah Absen')
   @section('judulhalaman', 'Menambah Data Absen')

   @section('konten')
   <form action="/absen/store" method="post">
    {{ csrf_field() }}
    <br>
    <label class="col-sm-2 control-label">IDPegawai</label>
    <div class="col-sm-10">
        <select name="IDPegawai">
        @foreach($pegawai as $p)
        <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
        @endforeach
        </select>
    </div>
    <br>
    <br>
    <div class="form-group">
        <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
        <div class='col-sm-10 input-group date' id='dtpickerdemo'>
            <input type='text' class="form-control" name="Tanggal" required="required" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#dtpickerdemo').datetimepicker({
                format: 'YYYY-MM-DD hh:mm:ss',
                showTodayButton: false,
                locale : 'id',
                "defaultDate": new Date(),
            });
        });
    </script>

    Status <br>
    
    <input type="radio" id="html" name="Status" value="I">
    <label for="html">Izin</label><br>
    <input type="radio" id="css" name="Status" value="S" checked="checked">
    <label for="css">Sakit</label><br>
    <input type="radio" id="javascript" name="Status" value="A">
    <label for="javascript">Alpha</label>

    <p><input type="submit" value="Simpan Data"></p>
</form>
<p> <a href="/absen"> Kembali</a></p>
@endsection
