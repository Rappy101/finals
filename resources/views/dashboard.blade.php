<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Groupmates CV Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        
        .navbar {
            background-color: #54AFE4;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        .navbar .dashboard-link {
            font-weight: bold;
        }
        .navbar .logout-btn {
            background-color: #f44336; 
            padding: 10px 20px;
            border-radius: 5px;
        }
        .navbar .logout-btn:hover {
            background-color: #e31b0c;
        }

        .dashboard-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }
        .groupmate-card {
            background-color: white;
            padding: 20px;
            margin: 10px;
            width: 200px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .groupmate-card img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
        }
        .groupmate-card h3 {
            margin: 10px 0;
        }
        .groupmate-card button {
            padding: 10px;
            margin: 5px;
            width: 90%;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .groupmate-card button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="" class="dashboard-link">Dashboard</a>
        <a href="/" class="logout-btn">Logout</a>
    </div>

    <h1>CV Dashboard</h1>
    <div class="dashboard-container">
        <div class="groupmate-card">
            <img src="images/ralphID.png" alt="Groupmate 1">
            <h3>Ralph Lorence Arriola</h3>
            <button onclick="window.location='{{ route('resume') }}?id=1'">View CV</button>
            <button onclick="window.location='{{ route('edit') }}?id=1'">Edit CV</button>
            <button onclick="window.location='{{ route('status') }}?id=1'">View Status</button>
        </div>
        <div class="groupmate-card">
            <img src="images/alizaID.png" alt="Groupmate 1">
            <h3>Aliza Grace Layug</h3>
            <button onclick="window.location='{{ route('resume') }}?id=2'">View CV</button>
            <button onclick="window.location='{{ route('edit') }}?id=2'">Edit CV</button>
            <button onclick="window.location='{{ route('status') }}?id=2'">View Status</button>
        </div>
        <div class="groupmate-card">
            <img src="images/daneID.png" alt="Groupmate 1">
            <h3>Danelaine Villanueva</h3>
            <button onclick="window.location='{{ route('resume') }}?id=3'">View CV</button>
            <button onclick="window.location='{{ route('edit') }}?id=3'">Edit CV</button>
            <button onclick="window.location='{{ route('status') }}?id=3'">View Status</button>
        </div>
        <div class="groupmate-card">
            <img src="images/jirehID.png" alt="Groupmate 1">
            <h3>Jireh Lansangan</h3>
            <button onclick="window.location='{{ route('resume') }}?id=4'">View CV</button>
            <button onclick="window.location='{{ route('edit') }}?id=4'">Edit CV</button>
            <button onclick="window.location='{{ route('status') }}?id=4'">View Status</button>
        </div>
        <div class="groupmate-card">
            <img src="images/rocelleID.png" alt="Groupmate 1">
            <h3>Rocelle Pangilinan</h3>
            <button onclick="window.location='{{ route('resume') }}?id=5'">View CV</button>
            <button onclick="window.location='{{ route('edit') }}?id=5'">Edit CV</button>
            <button onclick="window.location='{{ route('status') }}?id=5'">View Status</button>
        </div>
        <div class="groupmate-card">
            <img src="images/kimID.png" alt="Groupmate 1">
            <h3>Kim Joshua Salatan</h3>
            <button onclick="window.location='{{ route('resume') }}?id=6'">View CV</button>
            <button onclick="window.location='{{ route('edit') }}?id=6'">Edit CV</button>
            <button onclick="window.location='{{ route('status') }}?id=6'">View Status</button>
        </div>
        <div class="groupmate-card">
            <img src="images/maricelID.png" alt="Groupmate 1">
            <h3>Maricel Cruz</h3>
            <button onclick="window.location='{{ route('resume') }}?id=7'">View CV</button>
            <button onclick="window.location='{{ route('edit') }}?id=7'">Edit CV</button>
            <button onclick="window.location='{{ route('status') }}?id=7'">View Status</button>
        </div>
        <div class="groupmate-card">
            <img src="images/renzoID.png" alt="Groupmate 1">
            <h3>Renzo Miranda Nañez</h3>
            <button onclick="window.location='{{ route('resume') }}?id=8'">View CV</button>
            <button onclick="window.location='{{ route('edit') }}?id=8'">Edit CV</button>
            <button onclick="window.location='{{ route('status') }}?id=8'">View Status</button>
        </div>
        <div class="groupmate-card">
            <img src="images/margarethID.png" alt="Groupmate 1">
            <h3>Jo Margareth Banag</h3>
            <button onclick="window.location='{{ route('resume') }}?id=9'">View CV</button>
            <button onclick="window.location='{{ route('edit') }}?id=9'">Edit CV</button>
            <button onclick="window.location='{{ route('status') }}?id=9'">View Status</button>
        </div>
    </div>


</body>
</html>
