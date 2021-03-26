<!doctype html>
<html lang="en">
<head>
    <title>J-Fill Service Request | I. Janvey &amp; Sons</title>
    <meta charset="UTF-8" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="/css/jfill.css" rel="stylesheet" />
    @yield('head')
</head>

<body>

    <header>
        <!-- Diversey Image -->
        <img src="/images/janvey_logo-125.png" alt="Janvey Logo" />

    </header>

    <section>
        <h1>J-Fill Service Request</h1>

        <form method="post">
            <label for="custName" class="form-label">Customer Name</label>
            <input type="text" name="custName" class="form-control" placeholder="ABC Company" />

            <label for="custPhone" class="form-label">Customer Phone</label>
            <input type="tel" name="custPhone" class="form-control" />

            <label for="custEmail" class="form-label">Customer Email</label>
            <input type="email" name="custEmail" class="form-control" />

            <label for="unitType" class="form-label">Unit Type</label>
            <select name="unitType" class="form-select">
                <option selecteddisabled>--Select J-Fill Type--</option>
                <option value="uno">Uno</option>
                <option value="duo">Duo</option>
                <option value="quattro">Quattro</option>
            </select>

            <label for="numOfUnits" class="form-label">Number of Units</label>
            <input type="number" name="numOfUnits" min="0" class="form-control" />

            <label for="unitDesc" class="form-label">Notes about dispenser(s)</label>
            <textarea name="unitDesc" class="form-control" rows="3"></textarea>

            {{-- <label for="initials" class="form-label">Your Initials</label>
            <input type="text" name="initials" class="form-control" /> --}}
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Send Request</button>
            </div>

        </form>

    </section>

    <footer>&copy; I. Janvey &amp; Sons, 2021</footer>

</body>
</html>
