<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Rekam Medis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 8px;
            padding-right: 0px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group select {
            width: 100%;
            padding: 8px;
            padding-right: 0px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }

        .text-danger {
            color: red;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Rekam Medis</h2>
        <form action="/create" method="post">
            @csrf
            <div class="form-group">
                <label for="pasien_id">Pasien:</label>
                <select id="pasien_id" name="pasien_id" class="form-control" required>
                    <option value="">Pilih Pasien</option>
                    @foreach($patients as $patient)
                        <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                    @endforeach
                </select>
                @error('pasien_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="dokter_id">Dokter:</label>
                <select id="dokter_id" name="dokter_id" class="form-control" required>
                    <option value="">Pilih Dokter</option>
                    @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                    @endforeach
                </select>
                @error('dokter_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="kondisi_kesehatan">Kondisi Kesehatan:</label>
                <input type="text" id="kondisi_kesehatan" name="kondisi_kesehatan" required>
                @error('kondisi_kesehatan')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="suhu_tubuh">Suhu Tubuh:</label>
                <input type="text" id="suhu_tubuh" name="suhu_tubuh" required>
                @error('suhu_tubuh')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="resep_file">Resep File:</label>
                <input type="text" id="resep_file" name="resep_file" required>
                @error('resep_file')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>