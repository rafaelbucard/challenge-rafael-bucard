<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Day Number</title>
    <style>
        /* Estilos CSS aqui */
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        
        .card {
            background-color: #ffffff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
        }
        
        h1 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        label {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        
        input[type="date"] {
            font-size: 1.2rem;
            padding: 10px;
            border-radius: 5px;
            border: none;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            width: 100%;
            max-width: 300px;
        }
        
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            font-size: 1.2rem;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        button[type="submit"]:hover {
            background-color: #3e8e41;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Day Number</h1>
        @if(session('error'))
            <div class="error-message">{{ session('error') }}</div>
        @endif
        <form method="POST" action="{{ route('day-number') }}">
            @csrf
            <label for="date">Data:</label>
            <input type="text" id="date" name="date" required pattern="\d{4}-\d{2}-\d{2}" title="A data deve estar no formato aaaa-mm-dd">
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
