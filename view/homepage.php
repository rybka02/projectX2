<div id="wrapper">
    <!-- navbar -->
    <nav>
        <div>
            <a class="nav" href="#">Login</a>
        </div>
    </nav>

    <!-- signup form -->
    <div>
       <label for="gender-select">Seeking a</label>
        <select id="gender-select">
            <option id="gender-opt"></option>
        </select>
        <label for="zipcode">in Zipcode</label>
        <input id="zipcode" type="number">
    </div>

</div>

<div>
    <label for="month">MM</label>
     <input type="number" id="month" min="1" max="12">
    <label for="day">DD</label>
     <input type="number" id="day" min="1" max="31">
    <label for="year">YYYY</label>
     <input type="number" id="year" min="1900" max="2016">
</div>


<div>
    <label for="email">Email Address</label>
    <input type="email" id="email">
    <label for="password">Password</label>
    <input type="password" id="password">
</div>