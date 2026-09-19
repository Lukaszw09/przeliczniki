let przycisk = document.getElementById("button1_dodaj");


przycisk.addEventListener("click", async function () 
{

    const odpowiedz = await fetch("sesja.php?typ=dlugosc");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_dlugosci");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_dlugosci`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_dlugosci`;

    select.innerHTML = `
    <option value="m">Metr</option>
        <option value="μm">mikrometr</option>
        <option value="mm">Milimetr</option>
        <option value="cm">Centymetr</option>
        <option value="dm">decymetr</option>
        <option value="km">Kilometr</option>
        <option value="in">cal</option>
        <option value="ft">stopa</option>
        <option value="yd">jard</option>
        <option value="mi">Mila</option>
        <option value="au">jednostka astronomiczna</option>
        <option value="ly">rok świetlny</option>
        <option value="par">parsek</option>  
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk2 = document.getElementById("button2_dodaj");

przycisk2.addEventListener("click", async function () 
{   
    const odpowiedz = await fetch("sesja.php?typ=powierzchnia");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_powierzchni");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_powierzchni`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_powierzchni`;

    select.innerHTML = `
                <option value="m²">Metr kwadratowy</option>
                <option value="km²">Kilometr kwadratowy</option>
                <option value="ha">hektar</option>
                <option value="a">ar</option>
                <option value="dm²">Decymetr kwadratowy</option>
                <option value="cm²">Centymetr kwadratowy</option>
                <option value="mm²">Milimetr kwadratowy </option>
                <option value="mi²">Mila kwadratowa</option>
                <option value="akr">akr</option>
                <option value="ft²">stopa kwadratowa</option>
                <option value="in²">cal kwadratowy</option>
                <option value="yd²">jard kwadratowy</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk3 = document.getElementById("button3_dodaj");

przycisk3.addEventListener("click", async function () 
{
    const odpowiedz = await fetch("sesja.php?typ=objentosc");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_objetosci");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_objetosci`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_objetosci`;

    select.innerHTML = `
                <option value="m³">Metr sześcienny/kubik</option>
                <option value="dm³">Decymetr sześcienny/litr</option>
                <option value="cm³">Centymetr sześcienny/mili litr</option>
                <option value="mm³">Milimetr sześcienny</option>
                <option value="mi³">Mila sześcienna</option>
                <option value="galusa">galon amerykański</option>
                <option value="galuk">galon brytyjski</option>
                <option value="bary">barylka</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk4 = document.getElementById("button4_dodaj");

przycisk4.addEventListener("click", async function () 
{
    const odpowiedz = await fetch("sesja.php?typ=predkosc");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_prędkości");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_prędkości`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_prędkości`;

    select.innerHTML = `
                <option value="m/s">Metr na sekundę</option>
                <option value="km/h">Kilometr na godzinę</option>
                <option value="cm/s">Centymetr na sekundę</option>
                <option value="m/h">Metr na godzinę</option>
                <option value="mi/h">Mila na godzinę</option>
                <option value="ft/s">Stopa na sekundę</option>
                <option value="mn/h">węzel</option>
                <option value="ma">mach</option>
                <option value="c">światlo</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk5 = document.getElementById("button5_dodaj");

przycisk5.addEventListener("click", async function () 
{ 
    const odpowiedz = await fetch("sesja.php?typ=czas");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_czasu");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_czasu`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_czasu`;

    select.innerHTML = `

                <option value="s">Sekundy</option>
                <option value="min">Minuty</option>
                <option value="h">Godziny</option>
                <option value="d">Dni</option>
                <option value="wk">Tygodnie</option>
                <option value="kw">kwartal</option>
                <option value="y">Lata</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk6 = document.getElementById("button6_dodaj");

przycisk6.addEventListener("click", async function () 
{
    const odpowiedz = await fetch("sesja.php?typ=waga");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_wagi");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_wagi`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_wagi`;

    select.innerHTML = `

                <option value="g">Gramy</option>
                <option value="mg">miligramy</option>
                <option value="dg">Dekagramy</option>
                <option value="kg">Kilogramy</option>
                <option value="t">Tony</option>
                <option value="oz">uncja</option>
                <option value="lb">funt</option>
                <option value="st">stone</option>
                <option value="karat">karat</option>
                <option value="tona_us">tona amerykańska</option>
                <option value="tona_uk">tona brytyjska</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk7 = document.getElementById("button7_dodaj");

przycisk7.addEventListener("click", async function () 
{
    const odpowiedz = await fetch("sesja.php?typ=temperatury");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_temperatury");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_temperatury`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_temperatury`;

    select.innerHTML = `

                <option value="C">Celsjusze</option>
                <option value="F">Fahrenheity</option>
                <option value="K">Kelwiny</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk8 = document.getElementById("button8_dodaj");

przycisk8.addEventListener("click", async function () 
{
    const odpowiedz = await fetch("sesja.php?typ=cisnienia");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_cisnienia");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_cisnienia`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_cisnienia`;

    select.innerHTML = `
                <option value="Pa">Paskale</option>
                <option value="kPa">Kilopaskale</option>
                <option value="HPa">Hektopaskale</option>
                <option value="MePa">Megapaskale</option>
                <option value="bar">bar</option>
                <option value="psi ">funt na cal kwadratowy</option>
                <option value="mmHg">milimetr slupa rtęci</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk9 = document.getElementById("button9_dodaj");

przycisk9.addEventListener("click", async function () 
{
    const odpowiedz = await fetch("sesja.php?typ=energii");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_energii");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_energii`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_energii`;

    select.innerHTML = `

                <option value="J">Joule</option>
                <option value="kJ">Kilojoule</option>
                <option value="MeJ">Megajoule</option>
                <option value="GJ">Gigajoule</option>
                <option value="wh">Watogodzina</option>
                <option value="kwh">Kilowatogodzina</option>
                <option value="eV">Elektronowolt</option>
                <option value="cal">Kalorie</option>
                <option value="kcal">Kilokalorie</option>
                <option value="Erg">centymetr-gram-sekunda</option>
                <option value="BTU">Ilość ciepla potrzebna do ogrzania 1 funta wody o 1°F</option>
                <option value="thm"> ilość ciepla uzyskiwaną ze spalenia określonej objętości gazu</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk10 = document.getElementById("button10_dodaj");

przycisk10.addEventListener("click", async function () 
{
    const odpowiedz = await fetch("sesja.php?typ=mocy");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_mocy");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_mocy`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_mocy`;

    select.innerHTML = `

                <option value="W">Wat</option>
                <option value="kW">Kilowat</option>
                <option value="MW">Megawat</option>
                <option value="GW">Gigawat</option>
                <option value="HP">Koń mechaniczny</option>
                <option value="erg/s">wykonanie pracy o wartości 1 erga w czasie 1 sekundy</option>
                <option value="ft·lb/min">Stopofunt na minutę</option>
                <option value="L">jasność slońca</option>
                <option value="dBW">decybelowat</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk11 = document.getElementById("button11_dodaj");

przycisk11.addEventListener("click", async function () 
{   
    const odpowiedz = await fetch("sesja.php?typ=sila");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_sily");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_sily`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_sily`;

    select.innerHTML = `

                    <option value="N">Newton</option>
                    <option value="lbf">Funt sily</option>
                    <option value="dyn">Dyna <!-- sila, która nadaje masie 1 grama przyspieszenie 1 centymetra na sekundę do kwadratu --></option> 
                    <option value="kgf">Kilogram sily</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk12 = document.getElementById("button12_dodaj");
przycisk12.addEventListener("click", async function () 
{   
    const odpowiedz = await fetch("sesja.php?typ=przyspieszenie");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_przyśpieszenia");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_przyśpieszenia`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_przyśpieszenia`;

    select.innerHTML = `

                <option value="m/s²">Metr na sekundę do kwadratu</option>
                <option value="km/h/s">Kilometr na godzinę na sekundę</option>
                <option value="g">przyspieszenie ziemskie</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk13 = document.getElementById("button13_dodaj");
przycisk13.addEventListener("click", async function () 
{
    const odpowiedz = await fetch("sesja.php?typ=dane");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_danych");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_danych`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_danych`;

    select.innerHTML = `
                <option value="b">bajt</option>
                <option value="kb">kilobajt</option>
                <option value="meb">megabajt</option>
                <option value="gb">gigabajt</option>
                <option value="tb">terabajt</option>
                <option value="pb">petabajt</option>
                <option value="bit">bit</option>
                <option value="KiB">Kibibajt</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk14 = document.getElementById("button14_dodaj");
przycisk14.addEventListener("click", async function () 
{   
    const odpowiedz = await fetch("sesja.php?typ=gestosc");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_gęstości");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_gęstości`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_gęstości`;

    select.innerHTML = `

                <option value="kg/m³">kilogram na metr sześcienny</option>
                <option value="g/cm³">gram na centymetr sześcienny</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk15 = document.getElementById("button15_dodaj");
przycisk15.addEventListener("click", async function () 
{   
    const odpowiedz = await fetch("sesja.php?typ=czestotliwosc");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_częstotliwości");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_częstotliwości`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_częstotliwości`;

    select.innerHTML = `

                <option value="Hz">herc</option>
                <option value="kHz">kiloherc</option>
                <option value="MHz">megaherc</option>
                <option value="GHz">gigaherc</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk16 = document.getElementById("button16_dodaj");
przycisk16.addEventListener("click", async function () 
{
    const odpowiedz = await fetch("sesja.php?typ=napiecie");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_napięcia");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_napięcia`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_napięcia`;

    select.innerHTML = `
                <option value="V">wolt</option>
                <option value="µV">mikrowolt</option>
                <option value="mV">milivolt</option>
                <option value="kV">kilowolt</option>
                <option value="MeV">megawolt</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk17 = document.getElementById("button17_dodaj");
przycisk17.addEventListener("click", async function () 
{
    const odpowiedz = await fetch("sesja.php?typ=natężenie");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_natężenia");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_natężenie`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_natężenie`;

    select.innerHTML = `

                
    <option value="A">amper</option>
    <option value="µA">mikroamper</option>
    <option value="mA">miliamper</option>
    <option value="kA">kiloamper</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk18 = document.getElementById("button18_dodaj");
przycisk18.addEventListener("click", async function () 
{
    const odpowiedz = await fetch("sesja.php?typ=kat");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_kat");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_kat`;
    

    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_kat`;

    select.innerHTML = `
    <option value="st">stopnie</option>
    <option value="rd">radiany</option>
    <option value="gr">gradiany</option>
    <option value="mk">minuty kątowe</option>
    <option value="sk">sekundy kątowe</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk19 = document.getElementById("button19_dodaj");
przycisk19.addEventListener("click", async function ()
{
    const odpowiedz = await fetch("sesja.php?typ=momentu");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_momentu");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_momentu`;


    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_momentu`;

    select.innerHTML = `

                
    <option value="N·m">niutonometr</option>
    <option value="kgf·m">kilogramosila metr</option>
    <option value="lb·ft">funt stopa</option>
    <option value="lb·in">funt cal</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk20 = document.getElementById("button20_dodaj");
przycisk20.addEventListener("click", async function ()
{
    const odpowiedz = await fetch("sesja.php?typ=rezystancji");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_rezystancji");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_rezystancji`;


    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_rezystancji`;

    select.innerHTML = `

                
    <option value="Ω">om</option>
    <option value="mΩ">miliom</option>
    <option value="kΩ">kiloom</option>
    <option value="MΩ">megaom</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});


let przycisk21 = document.getElementById("button21_dodaj");
przycisk21.addEventListener("click", async function ()
{
    const odpowiedz = await fetch("sesja.php?typ=lepkości");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_lepkości");

    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_lepkości`;


    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_lepkości`;
    select.innerHTML = `

    <option value="Pa·s">paskal·sekunda</option>
    <option value="cP">centypoise</option>
    <option value="mP">mili poise</option>
    <option value="P">poise</option>
    <option value="lb/(ft·s)">funt na stopę·sekundę</option>
    <option value="lb/(in·s)">funt na cal·sekundę</option>
    `;

    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

let przycisk22 = document.getElementById("button22_dodaj");
przycisk22.addEventListener("click", async function ()
{
    const odpowiedz = await fetch("sesja.php?typ=ladunek");
    const ile = parseInt(await odpowiedz.text());

    const div = document.getElementById("jednostki_ladunku");
    const input = document.createElement("input");

    input.type = "number";
    input.placeholder = "Wprowadź liczbę";
    input.id = `number${ile + 2}_ladunek`;
    
    const select = document.createElement("select");
    select.id = `jednostka${ile + 2}_ladunek`;
    select.innerHTML = `
        <option value="C">kulomb</option>
        <option value="mC">milikulomb</option>
        <option value="μC">mikrokulomb</option>
        <option value="nC">nanokulomb</option>
        <option value="pC">pikokulomb</option>
        <option value="ah">amperogodzina</option>
        <option value="mAh">miliamperogodzina</option>
    `;
    div.appendChild(input);
    div.appendChild(select);
    div.appendChild(document.createElement("br"));
});

async function przelicznik_dlugosci(input) {
    const inputy_dlugosc = document.querySelectorAll('#jednostki_dlugosci input[type="number"]');
    let jednostki_dlugosci = {
    "km": 1000,
    "m": 1,
    "dm": 0.1,
    "cm": 0.01,
    "mm": 0.001,
    "μm": 0.000001,
    "in": 0.0254,
    "ft": 0.3048,
    "yd": 0.9144,
    "mi": 1609.34,
    "kbl": 185.2,
    "nmi": 1852,
    "au": 149597870700,
    "ly": 9.4607e15,
    "par": 3.0857e16
};
    const numer_id = input.id.match(/\d+/)[0];
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_dlugosci`);
    const wartosc = parseFloat(input.value);

    if (isNaN(wartosc))
        return;

    let metry;
    switch (jednostka_pobrana.value) {
        case "km":
            metry = wartosc * jednostki_dlugosci["km"];
            break;

        case "m":
            metry = wartosc * jednostki_dlugosci["m"];
            break;

        case "dm":
            metry = wartosc * jednostki_dlugosci["dm"];
            break;
        case "cm":
            metry = wartosc * jednostki_dlugosci["cm"];
            break;
            
        case "mm":
            metry = wartosc * jednostki_dlugosci["mm"];
            break;

        case "μm":  
            metry = wartosc * jednostki_dlugosci["μm"];
            break;

        case "in":
            metry = wartosc * jednostki_dlugosci["in"];
            break;

        case "ft":
            metry = wartosc * jednostki_dlugosci["ft"];
            break;

        case "yd":
            metry = wartosc * jednostki_dlugosci["yd"];
            break;

        case "mi":
            metry = wartosc * jednostki_dlugosci["mi"];
            break;

        case "au":
            metry = wartosc * jednostki_dlugosci["au"];
            break;

        case "ly":
            metry = wartosc * jednostki_dlugosci["ly"];
            break;

        case "par":
            metry = wartosc * jednostki_dlugosci["par"];
            break;

        case "kbl":
            metry = wartosc * jednostki_dlugosci["kbl"];
            break;

        case "nmi":
            metry = wartosc * jednostki_dlugosci["nmi"];
            break;
        
    }
    for (let i = 1; i <= inputy_dlugosc.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_dlugosci`);
        let wynik = 0;

        switch (jednostka_zmiana.value) {
            case "km":
                wynik = metry / jednostki_dlugosci["km"];
                document.getElementById(`number${i}_dlugosci`).value = wynik;
                break;
            case "m":
                wynik = metry / jednostki_dlugosci["m"];
                document.getElementById(`number${i}_dlugosci`).value = wynik;
                break;
            case "dm":
                wynik = metry / jednostki_dlugosci["dm"];
                document.getElementById(`number${i}_dlugosci`).value = wynik;
                break;
            case "cm":
                wynik = metry / jednostki_dlugosci["cm"];
                document.getElementById(`number${i}_dlugosci`).value = wynik;
                break;  
            case "mm":
                wynik = metry / jednostki_dlugosci["mm"];
                document.getElementById(`number${i}_dlugosci`).value = wynik;
                break;
            case "μm":
                wynik = metry / jednostki_dlugosci["μm"];
                document.getElementById(`number${i}_dlugosci`).value = wynik;
                break;
            case "in":
                wynik = metry / jednostki_dlugosci["in"];
                document.getElementById(`number${i}_dlugosci`).value = wynik;
                break;
            case "ft":
                wynik = metry / jednostki_dlugosci["ft"];
                document.getElementById(`number${i}_dlugosci`).value = wynik;
                break;
            case "yd":
                wynik = metry / jednostki_dlugosci["yd"];
                document.getElementById(`number${i}_dlugosci`).value = wynik;
                break;
            case "mi": 
                wynik = metry / jednostki_dlugosci["mi"];
                document.getElementById(`number${i}_dlugosci`).value = wynik;
                break;
            case "au":
                wynik = metry / jednostki_dlugosci["au"];
                document.getElementById(`number${i}_dlugosci`).value = wynik;
                break;
            case "ly": 
                wynik = metry / jednostki_dlugosci["ly"];
                document.getElementById(`number${i}_dlugosci`).value = wynik;
                break;
            case "par":
                wynik = metry / jednostki_dlugosci["par"];
                document.getElementById(`number${i}_dlugosci`).value = wynik;
                break;
            case "kbl":
                wynik = metry / jednostki_dlugosci["kbl"];
                document.getElementById(`number${i}_dlugosci`).value = wynik;
                break;
            case "nmi":
                wynik = metry / jednostki_dlugosci["nmi"];
                document.getElementById(`number${i}_dlugosci`).value = wynik;
                break;
            
        }
    }
}
async function przelicznik_powierzchni(input) {
    const inputy_powierzchni = document.querySelectorAll('#jednostki_powierzchni input[type="number"]');
    let jednostki_powierzchni = {
    "km²": 1000000,
    "ha": 10000,
    "a": 100,
    "m²": 1,
    "dm²": 0.01,
    "cm²": 0.0001,
    "mm²": 0.000001,
    "mi²": 2589988.11,
    "akr": 4046.86,
    "ft²": 0.092903,
    "in²": 0.00064516,
    "yd²": 0.836127
};

    const numer_id = input.id.match(/\d+/)[0];
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_powierzchni`);
    const wartosc = parseFloat(input.value);

    if (isNaN(wartosc))
        return;

    let metry2;
    switch (jednostka_pobrana.value) 
    {
        case "km²":
            metry2 = wartosc * jednostki_powierzchni["km²"];
            break;

        case "ha":
            metry2 = wartosc * jednostki_powierzchni["ha"];
            break;

        case "a":
            metry2 = wartosc * jednostki_powierzchni["a"];
            break;

        case "m²":
            metry2 = wartosc * jednostki_powierzchni["m²"];
            break;

        case "dm²":
            metry2 = wartosc * jednostki_powierzchni["dm²"];
            break;

        case "cm²":
            metry2 = wartosc * jednostki_powierzchni["cm²"];
            break;

        case "mm²":
            metry2 = wartosc * jednostki_powierzchni["mm²"];
            break;

        case "mi²":
            metry2 = wartosc * jednostki_powierzchni["mi²"];
            break;
        case "akr":
            metry2 = wartosc * jednostki_powierzchni["akr"];
            break;
        case "ft²":
            metry2 = wartosc * jednostki_powierzchni["ft²"];
            break;
        case "in²":
            metry2 = wartosc * jednostki_powierzchni["in²"];
            break;
        case "yd²":
            metry2 = wartosc * jednostki_powierzchni["yd²"];
            break;
        
        
    }

for (let i = 1; i <= inputy_powierzchni.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_powierzchni`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "km²":
                wynik = metry2 / jednostki_powierzchni["km²"];
                document.getElementById(`number${i}_powierzchni`).value = wynik;
                break;
            case "ha":
                wynik = metry2 / jednostki_powierzchni["ha"];
                document.getElementById(`number${i}_powierzchni`).value = wynik;
                break;
            case "a":
                wynik = metry2 / jednostki_powierzchni["a"];
                document.getElementById(`number${i}_powierzchni`).value = wynik;
                break;
            case "m²":
                wynik = metry2 / jednostki_powierzchni["m²"];
                document.getElementById(`number${i}_powierzchni`).value = wynik;
                break;
            case "dm²":
                wynik = metry2 / jednostki_powierzchni["dm²"];
                document.getElementById(`number${i}_powierzchni`).value = wynik;
                break;
            case "cm²":
                wynik = metry2 / jednostki_powierzchni["cm²"];
                document.getElementById(`number${i}_powierzchni`).value = wynik;
                break;
            case "mm²":
                wynik = metry2 / jednostki_powierzchni["mm²"];
                document.getElementById(`number${i}_powierzchni`).value = wynik;
                break;
            case "mi²":
                wynik = metry2 / jednostki_powierzchni["mi²"];
                document.getElementById(`number${i}_powierzchni`).value = wynik;
                break;
            case "akr":
                wynik = metry2 / jednostki_powierzchni["akr"];
                document.getElementById(`number${i}_powierzchni`).value = wynik;
                break;
            case "ft²":
                wynik = metry2 / jednostki_powierzchni["ft²"]; 
                document.getElementById(`number${i}_powierzchni`).value = wynik;
                break;
            case "in²":
                wynik = metry2 / jednostki_powierzchni["in²"];
                document.getElementById(`number${i}_powierzchni`).value = wynik;
                break;
            case "yd²":
                wynik = metry2 / jednostki_powierzchni["yd²"];
                document.getElementById(`number${i}_powierzchni`).value = wynik;
                break;

        }
        document.getElementById(`number${i}_powierzchni`).value = wynik;
    }
}
async function przelicznik_objetosci(input) {
        const inputy_objetosci = document.querySelectorAll('#jednostki_objetosci input[type="number"]');
        let jednostki_objetosci = {
            "m³": 1,
            "dm³": 0.001,
            "cm³": 0.000001,
            "mm³": 0.000000001,
            "km³": 1000000000,
            "mi³": 4168181825.44058,
            "gal_usa": 0.0037854,
            "gal_uk": 0.0045461,
            "bar": 0.15899
        };
        const numer_id = input.id.match(/\d+/)[0];
        const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_objetosci`);
        const wartosc = parseFloat(input.value);

        if (isNaN(wartosc))
            return;

        let metry3;
        switch (jednostka_pobrana.value) 
        {
            case "m³":
                metry3 = wartosc * 1;
                break;
            case "dm³":
                metry3 = wartosc * jednostki_objetosci["dm³"];
                break;
            case "cm³":
                metry3 = wartosc * jednostki_objetosci["cm³"];
                break;
            case "mm³":
                metry3 = wartosc * jednostki_objetosci["mm³"];
                break;
            case "km³":
                metry3 = wartosc * jednostki_objetosci["km³"];
                break;
            case "mi³":
                metry3 = wartosc * jednostki_objetosci["mi³"];
                break;
            case "gal_usa":
                metry3 = wartosc * jednostki_objetosci["gal_usa"];
                break;
            case "gal_uk":
                metry3 = wartosc * jednostki_objetosci["gal_uk"];
                break;
            case "bar":
                metry3 = wartosc * jednostki_objetosci["bar"];
                break;
        }
        
        for (let i = 1; i <= inputy_objetosci.length; i++) {
            const jednostka_zmiana = document.getElementById(`jednostka${i}_objetosci`);
            let wynik = 0;
            switch (jednostka_zmiana.value) {
                case "m³":
                    wynik = metry3 / jednostki_objetosci["m³"];
                    document.getElementById(`number${i}_objetosci`).value = wynik;
                    break;
                case "dm³":
                    wynik = metry3 / jednostki_objetosci["dm³"];
                    document.getElementById(`number${i}_objetosci`).value = wynik;
                    break;
                case "cm³":
                    wynik = metry3 / jednostki_objetosci["cm³"];
                    document.getElementById(`number${i}_objetosci`).value = wynik;
                    break;
                case "mm³":
                    wynik = metry3 / jednostki_objetosci["mm³"];
                    document.getElementById(`number${i}_objetosci`).value = wynik;
                    break;
                case "km³":
                    wynik = metry3 / jednostki_objetosci["km³"];
                    document.getElementById(`number${i}_objetosci`).value = wynik;
                    break;
                case "mi³":
                    wynik = metry3 / jednostki_objetosci["mi³"];
                    document.getElementById(`number${i}_objetosci`).value = wynik;
                    break;
                case "gal_usa":
                    wynik = metry3 / jednostki_objetosci["gal_usa"];
                    document.getElementById(`number${i}_objetosci`).value = wynik;
                    break;
                case "gal_uk":
                    wynik = metry3 / jednostki_objetosci["gal_uk"];
                    document.getElementById(`number${i}_objetosci`).value = wynik;
                    break;
                case "bar":
                    wynik = metry3 / jednostki_objetosci["bar"];
                    document.getElementById(`number${i}_objetosci`).value = wynik;
                    break;
            }
        }
    }

    

async function przelicznik_predkosci(input) {
    const inputy_predkosc = document.querySelectorAll('#jednostki_prędkości input[type="number"]');
    let jednostki_predkosci = {
        "km/h": 1 / 3.6,
        "m/s": 1,
        "cm/s": 0.01, 
        "m/h": 1 / 3600, 
        "mi/h": 0.44704, 
        "ft/s": 0.3048, 
        "mn/h": 0.514444, 
        "ma": 340.29, 
        "c": 299792458 
    };

    const numer_id = input.id.match(/\d+/)[0];
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_prędkości`);
    const wartosc = parseFloat(input.value);

    if (isNaN(wartosc)) return;

    let metry_na_sekunde;
    switch (jednostka_pobrana.value) {
        case "km/h": 
        metry_na_sekunde = wartosc * jednostki_predkosci["km/h"];
        break;

        case "m/s": 
        metry_na_sekunde = wartosc * jednostki_predkosci["m/s"];
        break;

        case "cm/s": 
        metry_na_sekunde = wartosc * jednostki_predkosci["cm/s"]; 
        break;

        case "m/h": 
        metry_na_sekunde = wartosc * jednostki_predkosci["m/h"]; 
        break;

        case "mi/h": 
        metry_na_sekunde = wartosc * jednostki_predkosci["mi/h"]; 
        break;

        case "ft/s": 
        metry_na_sekunde = wartosc * jednostki_predkosci["ft/s"]; 
        break;

        case "mn/h": 
        metry_na_sekunde = wartosc * jednostki_predkosci["mn/h"]; 
        break;

        case "ma": 
        metry_na_sekunde = wartosc * jednostki_predkosci["ma"]; 
        break;

        case "c": 
        metry_na_sekunde = wartosc * jednostki_predkosci["c"]; 
        break;

    }
    for (let i = 1; i <= inputy_predkosc.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_prędkości`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "km/h": 
                wynik = metry_na_sekunde / jednostki_predkosci["km/h"];
                document.getElementById(`number${i}_prędkości`).value = wynik;
                break;
            case "m/s":
                wynik = metry_na_sekunde / jednostki_predkosci["m/s"];
                document.getElementById(`number${i}_prędkości`).value = wynik;
                break;
            case "cm/s":
                wynik = metry_na_sekunde / jednostki_predkosci["cm/s"];
                document.getElementById(`number${i}_prędkości`).value = wynik;
                break;
            case "m/h":
                wynik = metry_na_sekunde / jednostki_predkosci["m/h"];
                document.getElementById(`number${i}_prędkości`).value = wynik;
                break;
            case "mi/h":
                wynik = metry_na_sekunde / jednostki_predkosci["mi/h"];
                document.getElementById(`number${i}_prędkości`).value = wynik;
                break;
            case "ft/s":
                wynik = metry_na_sekunde / jednostki_predkosci["ft/s"];
                document.getElementById(`number${i}_prędkości`).value = wynik;
                break;
            case "mn/h":
                wynik = metry_na_sekunde / jednostki_predkosci["mn/h"];
                document.getElementById(`number${i}_prędkości`).value = wynik;
                break;
            case "ma":
                wynik = metry_na_sekunde / jednostki_predkosci["ma"];
                document.getElementById(`number${i}_prędkości`).value = wynik;
                break;
            case "c":
                wynik = metry_na_sekunde / jednostki_predkosci["c"];
                document.getElementById(`number${i}_prędkości`).value = wynik;
                break;
        }
    }
}


async function przelicznik_czasu(input) {
    const inputy_czasu = document.querySelectorAll('#jednostki_czasu input[type="number"]');
    let jednostki_czasu = { 
        "s": 1, 
        "min": 60, 
        "h": 3600, 
        "d": 86400, 
        "wk": 604800, 
        "kw": 7889400, 
        "y": 31557600 
    };
    const numer_id = input.id.match(/\d+/)[0];
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_czasu`);
    const wartosc = parseFloat(input.value);

    if (isNaN(wartosc)) return;

    let sekundy;
    switch (jednostka_pobrana.value) {
        case "s": sekundy = wartosc * jednostki_czasu["s"]; 
        break;

        case "min": 
        sekundy = wartosc * jednostki_czasu["min"];
        break;

        case "h": 
        sekundy = wartosc * jednostki_czasu["h"];
        break;

        case "d": 
        sekundy = wartosc * jednostki_czasu["d"];
        break;

        case "wk": 
        sekundy = wartosc * jednostki_czasu["wk"];
        break;

        case "kw": 
        sekundy = wartosc * jednostki_czasu["kw"];
        break;

        case "y": 
        sekundy = wartosc * jednostki_czasu["y"];
        break;

    }
    for (let i = 1; i <= inputy_czasu.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_czasu`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "s": 
                wynik = sekundy / jednostki_czasu["s"];
                document.getElementById(`number${i}_czasu`).value = wynik;
                break;
            case "min":
                wynik = sekundy / jednostki_czasu["min"];
                document.getElementById(`number${i}_czasu`).value = wynik;
                break;
            case "h":
                wynik = sekundy / jednostki_czasu["h"];
                document.getElementById(`number${i}_czasu`).value = wynik;
                break;
            case "d":
                wynik = sekundy / jednostki_czasu["d"];
                document.getElementById(`number${i}_czasu`).value = wynik;
                break;
            case "wk":
                wynik = sekundy / jednostki_czasu["wk"];
                document.getElementById(`number${i}_czasu`).value = wynik;
                break;
            case "kw":
                wynik = sekundy / jednostki_czasu["kw"];
                document.getElementById(`number${i}_czasu`).value = wynik;
                break;
            case "y":
                wynik = sekundy / jednostki_czasu["y"];
                document.getElementById(`number${i}_czasu`).value = wynik;
                break;
        }
    }
}


async function przelicznik_masy(input) {
    const inputy_masy = document.querySelectorAll('#jednostki_wagi input[type="number"]');
    let jednostki_masy = { 
        "g": 1, 
        "mg": 0.001, 
        "dg": 10, 
        "kg": 1000, 
        "t": 1000000, 
        "oz": 28.349523125, 
        "lb": 453.59237, 
        "st": 6350.29318,
        "karat": 0.2,
        "tona_us": 907184.74,
        "tona_uk": 1016046.9088
    };
    const numer_id = input.id.match(/\d+/)[0];
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_wagi`);
    const wartosc = parseFloat(input.value);

    if (isNaN(wartosc)) return;

    let gramy;
    switch (jednostka_pobrana.value) {
        case "g": gramy = wartosc * jednostki_masy["g"]; 
        break;

        case "mg": gramy = wartosc * jednostki_masy["mg"]; 
        break;

        case "dg": gramy = wartosc * jednostki_masy["dg"]; 
        break;

        case "kg": gramy = wartosc * jednostki_masy["kg"]; 
        break;

        case "t": gramy = wartosc * jednostki_masy["t"]; 
        break;

        case "oz": gramy = wartosc * jednostki_masy["oz"]; 
        break;
        case "lb": gramy = wartosc * jednostki_masy["lb"]; 
        break;
        case "st": gramy = wartosc * jednostki_masy["st"]; 
        break;
        case "karat": gramy = wartosc * jednostki_masy["karat"];
        break;
        case "tona_us": gramy = wartosc * jednostki_masy["tona_us"];
        break;
        case "tona_uk": gramy = wartosc * jednostki_masy["tona_uk"];
        break;

    }
    for (let i = 1; i <= inputy_masy.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_wagi`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "g":
                wynik = gramy / jednostki_masy["g"];
                document.getElementById(`number${i}_wagi`).value = wynik;
                break;
            case "mg":
                wynik = gramy / jednostki_masy["mg"];
                document.getElementById(`number${i}_wagi`).value = wynik;
                break;
            case "dg":  
                wynik = gramy / jednostki_masy["dg"];
                document.getElementById(`number${i}_wagi`).value = wynik;
                break;
            case "kg":
                wynik = gramy / jednostki_masy["kg"];
                document.getElementById(`number${i}_wagi`).value = wynik;
                break;
            case "t":
                wynik = gramy / jednostki_masy["t"];
                document.getElementById(`number${i}_wagi`).value = wynik;
                break;
            case "oz":
                wynik = gramy / jednostki_masy["oz"];
                document.getElementById(`number${i}_wagi`).value = wynik;
                break;
            case "lb":
                wynik = gramy / jednostki_masy["lb"];
                document.getElementById(`number${i}_wagi`).value = wynik;
                break;
            case "st":
                wynik = gramy / jednostki_masy["st"];
                document.getElementById(`number${i}_wagi`).value = wynik;
                break;
            case "karat":
                wynik = gramy / jednostki_masy["karat"];
                document.getElementById(`number${i}_wagi`).value = wynik;
                break;
            case "tona_us":
                wynik = gramy / jednostki_masy["tona_us"];
                document.getElementById(`number${i}_wagi`).value = wynik;
                break;
            case "tona_uk":
                wynik = gramy / jednostki_masy["tona_uk"];
                document.getElementById(`number${i}_wagi`).value = wynik;
                break;

        }

    }
}

    async function przelicznik_temperatury(input) {
    const inputy_temperatury = document.querySelectorAll('#jednostki_temperatury input[type="number"]');
        
    const numer_id = input.id.match(/\d+/)[0];
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_temperatury`);
    const wartosc = parseFloat(input.value);

    if (isNaN(wartosc)) return;
    let celsjusze;

    switch (jednostka_pobrana.value) {
        case "C": celsjusze = wartosc; 
        break;
        case "F": celsjusze = (wartosc - 32) * 5 / 9;
        break;
        case "K": celsjusze = wartosc - 273.15; 
        break;
    }
    for (let i = 1; i <= inputy_temperatury.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_temperatury`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "C": 
                wynik = celsjusze;
                document.getElementById(`number${i}_temperatury`).value = wynik;
                break;
            case "F":
                wynik = (celsjusze * 9 / 5) + 32;
                document.getElementById(`number${i}_temperatury`).value = wynik;
                break;
            case "K":
                wynik = celsjusze + 273.15;
                document.getElementById(`number${i}_temperatury`).value = wynik;
                break;
        }
}}

async function przelicznik_cisnienia(input) {
    const inputy_cisnienia = document.querySelectorAll('#jednostki_cisnienia input[type="number"]');
    let jednostki_cisnienia = { 
        "Pa": 1, 
        "kPa": 1000, 
        "HPa": 100, 
        "MePa": 1000000, 
        "bar": 100000, 
        "psi ": 6894.757293168, 
        "mmHg": 133.322387415 
    };

    const numer_id = input.id.match(/\d+/)[0];
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_cisnienia`); 
    const wartosc = parseFloat(input.value);

    if (isNaN(wartosc)) return; 

    let paskale;
    switch (jednostka_pobrana.value) {
        case "Pa": paskale = wartosc * jednostki_cisnienia["Pa"]; 
        break; 
        case "kPa": paskale = wartosc * jednostki_cisnienia["kPa"]; 
        break; 
        case "HPa": paskale = wartosc * jednostki_cisnienia["HPa"]; 
        break; 
        case "MePa": paskale = wartosc * jednostki_cisnienia["MePa"]; 
        break; 
        case "bar": paskale = wartosc * jednostki_cisnienia["bar"]; 
        break; 
        case "psi ": paskale = wartosc * jednostki_cisnienia["psi "]; 
        break; 
        case "mmHg": paskale = wartosc * jednostki_cisnienia["mmHg"]; 
        break;
    }
    for (let i = 1; i <= inputy_cisnienia.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_cisnienia`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "Pa":
                wynik = paskale / jednostki_cisnienia["Pa"];
                document.getElementById(`number${i}_cisnienia`).value = wynik;
                break;
            case "kPa":
                wynik = paskale / jednostki_cisnienia["kPa"];
                document.getElementById(`number${i}_cisnienia`).value = wynik;
                break;
            case "HPa":
                wynik = paskale / jednostki_cisnienia["HPa"];
                document.getElementById(`number${i}_cisnienia`).value = wynik;
                break;
            case "MePa":
                wynik = paskale / jednostki_cisnienia["MePa"];
                document.getElementById(`number${i}_cisnienia`).value = wynik;
                break;
            case "bar":
                wynik = paskale / jednostki_cisnienia["bar"];
                document.getElementById(`number${i}_cisnienia`).value = wynik;
                break;
            case "psi ":
                wynik = paskale / jednostki_cisnienia["psi "];
                document.getElementById(`number${i}_cisnienia`).value = wynik;
                break;
            case "mmHg":
                wynik = paskale / jednostki_cisnienia["mmHg"];
                document.getElementById(`number${i}_cisnienia`).value = wynik;
                break;
        }
}

}

async function przelicznik_energii(input) {
    const inputy_energii = document.querySelectorAll('#jednostki_energii input[type="number"]');
    let jednostki_energii = { "J": 1, "kJ": 1000, "MeJ": 1000000, "GJ": 1000000000, "cal": 4.184, "kcal": 4184, "wh": 3600, "kwh": 3600000, "eV": 1.602176634e-19, "Erg": 1e-7, "BTU": 1055.05585262, "thm": 105480400 };
    
    const numer_id = input.id.match(/\d+/)[0]; 
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_energii`); 
    const wartosc = parseFloat(input.value);
    
    if (isNaN(wartosc)) return; 
    let dzule;

    switch (jednostka_pobrana.value) {
        case "J": dzule = wartosc * jednostki_energii["J"]; 
        break; 
        case "kJ": dzule = wartosc * jednostki_energii["kJ"]; 
        break; 
        case "MeJ": dzule = wartosc * jednostki_energii["MeJ"]; 
        break; 
        case "GJ": dzule = wartosc * jednostki_energii["GJ"]; 
        break; 
        case "cal": dzule = wartosc * jednostki_energii["cal"]; 
        break; 
        case "kcal": dzule = wartosc * jednostki_energii["kcal"]; 
        break; 
        case "wh": dzule = wartosc * jednostki_energii["wh"]; 
        break; 
        case "kwh": dzule = wartosc * jednostki_energii["kwh"]; 
        break; 
        case "eV": dzule = wartosc * jednostki_energii["eV"]; 
        break; 
        case "Erg": dzule = wartosc * jednostki_energii["Erg"]; 
        break; 
        case "BTU": dzule = wartosc * jednostki_energii["BTU"]; 
        break; 
        case "thm": dzule = wartosc * jednostki_energii["thm"]; 
        break;
    }
    for (let i = 1; i <= inputy_energii.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_energii`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "J": 
                wynik = dzule / jednostki_energii["J"];
                document.getElementById(`number${i}_energii`).value = wynik;
                break;
            case "kJ": 
                wynik = dzule / jednostki_energii["kJ"];
                document.getElementById(`number${i}_energii`).value = wynik;
                break;
            case "MeJ": 
                wynik = dzule / jednostki_energii["MeJ"];
                document.getElementById(`number${i}_energii`).value = wynik;
                break;
            case "GJ":
                wynik = dzule / jednostki_energii["GJ"];
                document.getElementById(`number${i}_energii`).value = wynik;
                break;
            case "cal":
                wynik = dzule / jednostki_energii["cal"];
                document.getElementById(`number${i}_energii`).value = wynik;
                break;
            case "kcal":
                wynik = dzule / jednostki_energii["kcal"];
                document.getElementById(`number${i}_energii`).value = wynik;
                break;
            case "wh":
                wynik = dzule / jednostki_energii["wh"];
                document.getElementById(`number${i}_energii`).value = wynik;
                break;
            case "kwh":
                wynik = dzule / jednostki_energii["kwh"];
                document.getElementById(`number${i}_energii`).value = wynik;
                break;
            case "eV":
                wynik = dzule / jednostki_energii["eV"];
                document.getElementById(`number${i}_energii`).value = wynik;
                break;
            case "Erg":
                wynik = dzule / jednostki_energii["Erg"];
                document.getElementById(`number${i}_energii`).value = wynik;
                break;
            case "BTU":
                wynik = dzule / jednostki_energii["BTU"];
                document.getElementById(`number${i}_energii`).value = wynik;
                break;
            case "thm":
                wynik = dzule / jednostki_energii["thm"];
                document.getElementById(`number${i}_energii`).value = wynik;
                break;

}}}

async function przelicznik_mocy(input) {
    const inputy_mocy = document.querySelectorAll('#jednostki_mocy input[type="number"]');

    let jednostki_mocy = { 
    "W": 1, 
    "kW": 1000, 
    "MW": 1000000, 
    "GW": 1000000000, 
    "HP": 735.49875, 
    "erg/s": 1e-7, 
    "ft·lb/min": 0.0225969658, 
    "L": 3.828e26 
    };
    
    const numer_id = input.id.match(/\d+/)[0];
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_mocy`);
    const wartosc = parseFloat(input.value);

    if (isNaN(wartosc)) return;

    let waty;
    switch (jednostka_pobrana.value) {
        case "W": waty = wartosc * jednostki_mocy["W"]; 
        break; 

        case "kW": waty = wartosc * jednostki_mocy["kW"]; 
        break; 

        case "MW": waty = wartosc * jednostki_mocy["MW"]; 
        break; 

        case "GW": waty = wartosc * jednostki_mocy["GW"]; 
        break; 

        case "HP": waty = wartosc * jednostki_mocy["HP"]; 
        break; 

        case "erg/s": waty = wartosc * jednostki_mocy["erg/s"]; 
        break; 

        case "ft·lb/min": waty = wartosc * jednostki_mocy["ft·lb/min"]; 
        break; 

        case "L": waty = wartosc * jednostki_mocy["L"]; 
        break; 

        case "dBW": waty = Math.pow(10, wartosc / 10); 
        break;
    }
    for (let i = 1; i <= inputy_mocy.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_mocy`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "W": 
                wynik = waty / jednostki_mocy["W"];
                document.getElementById(`number${i}_mocy`).value = wynik;
                break;
            case "kW":
                wynik = waty / jednostki_mocy["kW"];
                document.getElementById(`number${i}_mocy`).value = wynik;
                break;
            case "MW":
                wynik = waty / jednostki_mocy["MW"];
                document.getElementById(`number${i}_mocy`).value = wynik;
                break;
            case "GW":
                wynik = waty / jednostki_mocy["GW"];
                document.getElementById(`number${i}_mocy`).value = wynik;
                break;
            case "HP":
                wynik = waty / jednostki_mocy["HP"];
                document.getElementById(`number${i}_mocy`).value = wynik;
                break;
            case "erg/s":
                wynik = waty / jednostki_mocy["erg/s"];
                document.getElementById(`number${i}_mocy`).value = wynik;
                break;
            case "ft·lb/min":
                wynik = waty / jednostki_mocy["ft·lb/min"];
                document.getElementById(`number${i}_mocy`).value = wynik;
                break;
            case "L":
                wynik = waty / jednostki_mocy["L"];
                document.getElementById(`number${i}_mocy`).value = wynik;
                break;
            case "dBW":
                wynik = 10 * Math.log10(waty);
                document.getElementById(`number${i}_mocy`).value = wynik;
                break;
            
}}}

async function przelicznik_sily(input) {
    const inputy_sily = document.querySelectorAll('#jednostki_sily input[type="number"]');

    let jednostki_sily = { 
        "N": 1, 
        "lbf": 4.4482216152605, 
        "dyn": 0.00001, 
        "kgf": 9.80665 
    };
    
    const numer_id = input.id.match(/\d+/)[0]; 
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_sily`); 
    const wartosc = parseFloat(input.value);

    if (isNaN(wartosc)) return; 
    
    let niutony;
    switch (jednostka_pobrana.value) { 
    case "N": niutony = wartosc * jednostki_sily["N"]; 
    break; 
    case "lbf": niutony = wartosc * jednostki_sily["lbf"]; 
    break; 
    case "dyn": niutony = wartosc * jednostki_sily["dyn"]; 
    break; 
    case "kgf": niutony = wartosc * jednostki_sily["kgf"]; 
    break; 
    }

    for (let i = 1; i <= inputy_sily.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_sily`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "N": 
                wynik = niutony / jednostki_sily["N"];
                document.getElementById(`number${i}_sily`).value = wynik;
                break;
            case "lbf":
                wynik = niutony / jednostki_sily["lbf"];
                document.getElementById(`number${i}_sily`).value = wynik;
                break;
            case "dyn":
                wynik = niutony / jednostki_sily["dyn"];
                document.getElementById(`number${i}_sily`).value = wynik;
                break;  
            case "kgf":
                wynik = niutony / jednostki_sily["kgf"];
                document.getElementById(`number${i}_sily`).value = wynik;
                break;
    }}}

async function przelicznik_przyspieszenia(input) {
    const inputy_przyspieszenia = document.querySelectorAll('#jednostki_przyśpieszenia input[type="number"]');

    let jednostki_przyspieszenia = { 
    "m/s²": 1, 
    "km/h/s": 1 / 3.6, 
    "g": 9.80665 };
    
    const numer_id = input.id.match(/\d+/)[0]; 
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_przyśpieszenia`); 
    const wartosc = parseFloat(input.value);
    if (isNaN(wartosc)) return; 

    let metry_na_sekunde_kwadrat;
    switch (jednostka_pobrana.value) { 
    case "m/s²": metry_na_sekunde_kwadrat = wartosc * jednostki_przyspieszenia["m/s²"];
    break; 
    case "km/h/s": metry_na_sekunde_kwadrat = wartosc * jednostki_przyspieszenia["km/h/s"]; 
    break; 
    case "g": metry_na_sekunde_kwadrat = wartosc * jednostki_przyspieszenia["g"]; 
    break; 
    }
    for (let i = 1; i <= inputy_przyspieszenia.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_przyśpieszenia`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "m/s²":
                wynik = metry_na_sekunde_kwadrat / jednostki_przyspieszenia["m/s²"];
                document.getElementById(`number${i}_przyśpieszenia`).value = wynik;
                break;
            case "km/h/s":
                wynik = metry_na_sekunde_kwadrat / jednostki_przyspieszenia["km/h/s"];
                document.getElementById(`number${i}_przyśpieszenia`).value = wynik;
                break;
            case "g":
                wynik = metry_na_sekunde_kwadrat / jednostki_przyspieszenia["g"];
                document.getElementById(`number${i}_przyśpieszenia`).value = wynik;
                break;
        }
    }
}

async function przelicznik_danych(input) { 
    const inputy_danych = document.querySelectorAll('#jednostki_danych input[type="number"]');
    let jednostki_danych = { 
        "b": 1, 
        "kb": 1000, 
        "meb": 1000000, 
        "gb": 1000000000, 
        "tb": 1000000000000, 
        "pb": 1000000000000000, 
        "bit": 0.125, 
        "KiB": 1024 
    };

    const numer_id = input.id.match(/\d+/)[0]; 
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_danych`); 
    const wartosc = parseFloat(input.value);
    if (isNaN(wartosc)) return; 

    let bajty;
    switch (jednostka_pobrana.value) { 
    case "b": 
    bajty = wartosc * jednostki_danych["b"]; 
    break; 
    case "kb": bajty = wartosc * jednostki_danych["kb"]; 
    break; 
    case "meb": bajty = wartosc * jednostki_danych["meb"]; 
    break; 
    case "gb": bajty = wartosc * jednostki_danych["gb"]; 
    break;
    case "tb": bajty = wartosc * jednostki_danych["tb"]; 
    break;
    case "pb": bajty = wartosc * jednostki_danych["pb"]; 
    break;
    case "bit": bajty = wartosc * jednostki_danych["bit"]; 
    break;
    case "KiB": bajty = wartosc * jednostki_danych["KiB"]; 
    break; 
    }

    for (let i = 1; i <= inputy_danych.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_danych`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "b":
                wynik = bajty / jednostki_danych["b"];
                document.getElementById(`number${i}_danych`).value = wynik;
                break;
            case "kb":
                wynik = bajty / jednostki_danych["kb"];
                document.getElementById(`number${i}_danych`).value = wynik;
                break;
            case "meb":
                wynik = bajty / jednostki_danych["meb"];
                document.getElementById(`number${i}_danych`).value = wynik;
                break;
            case "gb":
                wynik = bajty / jednostki_danych["gb"];
                document.getElementById(`number${i}_danych`).value = wynik;
                break;
            case "tb":
                wynik = bajty / jednostki_danych["tb"];
                document.getElementById(`number${i}_danych`).value = wynik;
                break;
            case "pb":
                wynik = bajty / jednostki_danych["pb"];
                document.getElementById(`number${i}_danych`).value = wynik;
                break;
            case "bit":
                wynik = bajty / jednostki_danych["bit"];
                document.getElementById(`number${i}_danych`).value = wynik;
                break;
            case "KiB":
                wynik = bajty / jednostki_danych["KiB"];
                document.getElementById(`number${i}_danych`).value = wynik;
                break;
        }
    }
}


async function przelicznik_gestosci(input) {
    const inputy_gestosci = document.querySelectorAll('#jednostki_gęstości input[type="number"]');

    let jednostki_gestosci = { 
        "kg/m³": 1, 
        "g/cm³": 1000 };
    
    const numer_id = input.id.match(/\d+/)[0]; 
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_gęstości`); 
    const wartosc = parseFloat(input.value);
    if (isNaN(wartosc)) return; 

    let kilogramy_na_metr_szescienny;
    switch (jednostka_pobrana.value) { 
    case "kg/m³": kilogramy_na_metr_szescienny = wartosc * jednostki_gestosci["kg/m³"];
    break; 
    case "g/cm³": kilogramy_na_metr_szescienny = wartosc * jednostki_gestosci["g/cm³"];
    break; 
    }

    for (let i = 1; i <= inputy_gestosci.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_gęstości`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "kg/m³":
                wynik = kilogramy_na_metr_szescienny / jednostki_gestosci["kg/m³"];
                document.getElementById(`number${i}_gęstości`).value = wynik;
                break;
            case "g/cm³":
                wynik = kilogramy_na_metr_szescienny / jednostki_gestosci["g/cm³"];
                document.getElementById(`number${i}_gęstości`).value = wynik;
                break;
        }
    }
}

async function przelicznik_czestotliwosci(input) {
    const inputy_czestotliwosci = document.querySelectorAll('#jednostki_częstotliwości input[type="number"]');
    let jednostki_czestotliwosci = { 
        "Hz": 1, 
        "kHz": 1000, 
        "MHz": 1000000, 
        "GHz": 1000000000 };
    
    const numer_id = input.id.match(/\d+/)[0]; 
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_częstotliwości`); 
    const wartosc = parseFloat(input.value);
    if (isNaN(wartosc)) return; 

    let herce;
    switch (jednostka_pobrana.value) { 
    case "Hz": herce = wartosc * jednostki_czestotliwosci["Hz"];
    break; 
    case "kHz": herce = wartosc * jednostki_czestotliwosci["kHz"]; 
    break; 
    case "MHz": herce = wartosc * jednostki_czestotliwosci["MHz"]; 
    break; 
    case "GHz": herce = wartosc * jednostki_czestotliwosci["GHz"]; 
    break; 
    }

    for (let i = 1; i <= inputy_czestotliwosci.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_częstotliwości`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "Hz":
                wynik = herce / jednostki_czestotliwosci["Hz"];
                document.getElementById(`number${i}_częstotliwości`).value = wynik;
                break;
            case "kHz":
                wynik = herce / jednostki_czestotliwosci["kHz"];
                document.getElementById(`number${i}_częstotliwości`).value = wynik;
                break;
            case "MHz":
                wynik = herce / jednostki_czestotliwosci["MHz"];
                document.getElementById(`number${i}_częstotliwości`).value = wynik;
                break;
            case "GHz":
                wynik = herce / jednostki_czestotliwosci["GHz"];
                document.getElementById(`number${i}_częstotliwości`).value = wynik;
                break;
        }
    }
}

async function przelicznik_napiecia(input) {
    const inputy_napiecia = document.querySelectorAll('#jednostki_napięcia input[type="number"]');

    let jednostki_napiecia = { 
        "V": 1, 
        "µV": 0.000001, 
        "mV": 0.001, 
        "kV": 1000, 
        "MeV": 1000000 };
    
    const numer_id = input.id.match(/\d+/)[0]; 
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_napięcia`); 
    const wartosc = parseFloat(input.value);
    if (isNaN(wartosc)) return; 
    
    let wolty;
    switch (jednostka_pobrana.value) { 
    case "V": wolty = wartosc * jednostki_napiecia["V"]; 
    break; 
    case "µV": wolty = wartosc * jednostki_napiecia["µV"]; 
    break; 
    case "mV": wolty = wartosc * jednostki_napiecia["mV"]; 
    break; 
    case "kV": wolty = wartosc * jednostki_napiecia["kV"]; 
    break; 
    case "MeV": wolty = wartosc * jednostki_napiecia["MeV"]; 
    break; 
    }

    for (let i = 1; i <= inputy_napiecia.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_napięcia`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "V":
                wynik = wolty / jednostki_napiecia["V"];
                document.getElementById(`number${i}_napięcia`).value = wynik;
                break;
            case "µV":
                wynik = wolty / jednostki_napiecia["µV"];
                document.getElementById(`number${i}_napięcia`).value = wynik;
                break;
            case "mV":
                wynik = wolty / jednostki_napiecia["mV"];
                document.getElementById(`number${i}_napięcia`).value = wynik;
                break;
            case "kV":
                wynik = wolty / jednostki_napiecia["kV"];
                document.getElementById(`number${i}_napięcia`).value = wynik;
                break;
            case "MeV":
                wynik = wolty / jednostki_napiecia["MeV"];
                document.getElementById(`number${i}_napięcia`).value = wynik;
                break;
        }
    }
}

async function przelicznik_natezenia(input) {
    const inputy_natezenia = document.querySelectorAll('#jednostki_natężenia input[type="number"]');

    let jednostki_natezenia = { 
        "A": 1,
        "µA": 0.000001,
        "mA": 0.001,
        "kA": 1000 };

    const numer_id = input.id.match(/\d+/)[0]; 
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_natężenie`); 
    const wartosc = parseFloat(input.value);
    
    if (isNaN(wartosc)) return; 

    let ampery;
    switch (jednostka_pobrana.value) { 
    case "A": ampery = wartosc * jednostki_natezenia["A"];
    break; 
    case "µA": ampery = wartosc * jednostki_natezenia["µA"]; 
    break; 
    case "mA": ampery = wartosc * jednostki_natezenia["mA"]; 
    break; 
    case "kA": ampery = wartosc * jednostki_natezenia["kA"]; 
    break; 
    }

    for (let i = 1; i <= inputy_natezenia.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_natężenie`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "A":
                wynik = ampery / jednostki_natezenia["A"];
                document.getElementById(`number${i}_natężenie`).value = wynik;
                break;
            case "µA":
                wynik = ampery / jednostki_natezenia["µA"];
                document.getElementById(`number${i}_natężenie`).value = wynik;
                break;
            case "mA":
                wynik = ampery / jednostki_natezenia["mA"];
                document.getElementById(`number${i}_natężenie`).value = wynik;
                break;
            case "kA":
                wynik = ampery / jednostki_natezenia["kA"];
                document.getElementById(`number${i}_natężenie`).value = wynik;
                break;
        }
    }
}

async function przelicznik_kat(input) {
    const inputy_kat = document.querySelectorAll('#jednostki_kat input[type="number"]');

    let jednostki_kat = {
        "st": 1,
        "rd": 180 / Math.PI,
        "gr": 0.9,
        "mk": 1 / 60,
        "sk": 1 / 3600
    };

    const numer_id = input.id.match(/\d+/)[0];
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_kat`);
    const wartosc = parseFloat(input.value);

    if (isNaN(wartosc)) return;

    let stopnie;
    switch (jednostka_pobrana.value) {
        case "st":
            stopnie = wartosc * jednostki_kat["st"];
            break;
        case "rd":
            stopnie = wartosc * jednostki_kat["rd"];
            break;
        case "gr":
            stopnie = wartosc * jednostki_kat["gr"];
            break;
        case "mk":
            stopnie = wartosc * jednostki_kat["mk"];
            break;
        case "sk":
            stopnie = wartosc * jednostki_kat["sk"];
            break;
    }

    for (let i = 1; i <= inputy_kat.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_kat`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "st":
                wynik = stopnie / jednostki_kat["st"];
                document.getElementById(`number${i}_kat`).value = wynik;
                break;
            case "rd":
                wynik = stopnie / jednostki_kat["rd"];
                document.getElementById(`number${i}_kat`).value = wynik;
                break;
            case "gr":
                wynik = stopnie / jednostki_kat["gr"];
                document.getElementById(`number${i}_kat`).value = wynik;
                break;
            case "mk":
                wynik = stopnie / jednostki_kat["mk"];
                document.getElementById(`number${i}_kat`).value = wynik;
                break;
            case "sk":
                wynik = stopnie / jednostki_kat["sk"];
                document.getElementById(`number${i}_kat`).value = wynik;
                break;
        }
    }
}

async function przelicznik_momentu(input) {
    const inputy_momentu = document.querySelectorAll('#jednostki_momentu input[type="number"]');

    let jednostki_momentu = {
        "N·m": 1,
        "kgf·m": 9.80665,
        "lb·ft": 1.3558179483314004,
        "lb·in": 0.1129848290276167
    };

    const numer_id = input.id.match(/\d+/)[0];
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_momentu`);
    const wartosc = parseFloat(input.value);

    if (isNaN(wartosc)) return;

    let niutonometry;
    switch (jednostka_pobrana.value) {
        case "N·m":
            niutonometry = wartosc * jednostki_momentu["N·m"];
            break;
        case "kgf·m":
            niutonometry = wartosc * jednostki_momentu["kgf·m"];
            break;
        case "lb·ft":
            niutonometry = wartosc * jednostki_momentu["lb·ft"];
            break;
        case "lb·in":
            niutonometry = wartosc * jednostki_momentu["lb·in"];
            break;
    }

    for (let i = 1; i <= inputy_momentu.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_momentu`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "N·m":
                wynik = niutonometry / jednostki_momentu["N·m"];
                document.getElementById(`number${i}_momentu`).value = wynik;
                break;
            case "kgf·m":
                wynik = niutonometry / jednostki_momentu["kgf·m"];
                document.getElementById(`number${i}_momentu`).value = wynik;
                break;
            case "lb·ft":
                wynik = niutonometry / jednostki_momentu["lb·ft"];
                document.getElementById(`number${i}_momentu`).value = wynik;
                break;
            case "lb·in":
                wynik = niutonometry / jednostki_momentu["lb·in"];
                document.getElementById(`number${i}_momentu`).value = wynik;
                break;
        }
    }
}

async function przelicznik_rezystancji(input) {
    const inputy_rezystancji = document.querySelectorAll('#jednostki_rezystancji input[type="number"]');

    let jednostki_rezystancji = {
        "Ω": 1,
        "mΩ": 0.001,
        "kΩ": 1000,
        "MΩ": 1000000
    };

    const numer_id = input.id.match(/\d+/)[0];
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_rezystancji`);
    const wartosc = parseFloat(input.value);

    if (isNaN(wartosc)) return;

    let omy;
    switch (jednostka_pobrana.value) {
        case "Ω":
            omy = wartosc * jednostki_rezystancji["Ω"];
            break;
        case "mΩ":
            omy = wartosc * jednostki_rezystancji["mΩ"];
            break;
        case "kΩ":
            omy = wartosc * jednostki_rezystancji["kΩ"];
            break;
        case "MΩ":
            omy = wartosc * jednostki_rezystancji["MΩ"];
            break;
    }

    for (let i = 1; i <= inputy_rezystancji.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_rezystancji`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "Ω":
                wynik = omy / jednostki_rezystancji["Ω"];
                document.getElementById(`number${i}_rezystancji`).value = wynik;
                break;
            case "mΩ":
                wynik = omy / jednostki_rezystancji["mΩ"];
                document.getElementById(`number${i}_rezystancji`).value = wynik;
                break;
            case "kΩ":
                wynik = omy / jednostki_rezystancji["kΩ"];
                document.getElementById(`number${i}_rezystancji`).value = wynik;
                break;
            case "MΩ":
                wynik = omy / jednostki_rezystancji["MΩ"];
                document.getElementById(`number${i}_rezystancji`).value = wynik;
                break;
        }
    }
}

async function przelicznik_lepkości(input) {
    const inputy_lepkości = document.querySelectorAll('#jednostki_lepkości input[type="number"]');

    let jednostki_lepkości = {
        "Pa·s": 1,
        "mPa·s": 0.001,
        "cP": 0.001,
        "P": 0.1,
        "lb/(ft·s)": 1.4881639,
        "lb/(in·s)": 172.8,
    };

    const numer_id = input.id.match(/\d+/)[0];
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_lepkości`);
    const wartosc = parseFloat(input.value);

    if (isNaN(wartosc)) return;

    let pascale_na_sekunde;
    switch (jednostka_pobrana.value) {
        case "Pa·s":
            pascale_na_sekunde = wartosc * jednostki_lepkości["Pa·s"];
            break;
        case "mPa·s":
            pascale_na_sekunde = wartosc * jednostki_lepkości["mPa·s"];
            break;
        case "cP":
            pascale_na_sekunde = wartosc * jednostki_lepkości["cP"];
            break;
        case "P":
            pascale_na_sekunde = wartosc * jednostki_lepkości["P"];
            break;
        case "lb/(ft·s)":
            pascale_na_sekunde = wartosc * jednostki_lepkości["lb/(ft·s)"];
            break;
        case "lb/(in·s)":
            pascale_na_sekunde = wartosc * jednostki_lepkości["lb/(in·s)"];
            break;
    }

    for (let i = 1; i <= inputy_lepkości.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_lepkości`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "Pa·s":
                wynik = pascale_na_sekunde / jednostki_lepkości["Pa·s"];
                document.getElementById(`number${i}_lepkości`).value = wynik;
                break;
            case "mPa·s":
                wynik = pascale_na_sekunde / jednostki_lepkości["mPa·s"];
                document.getElementById(`number${i}_lepkości`).value = wynik;
                break;
            case "cP":
                wynik = pascale_na_sekunde / jednostki_lepkości["cP"];
                document.getElementById(`number${i}_lepkości`).value = wynik;
                break;
            case "P":
                wynik = pascale_na_sekunde / jednostki_lepkości["P"];
                document.getElementById(`number${i}_lepkości`).value = wynik;
                break;
            case "lb/(ft·s)":
                wynik = pascale_na_sekunde / jednostki_lepkości["lb/(ft·s)"];
                document.getElementById(`number${i}_lepkości`).value = wynik;
                break;
            case "lb/(in·s)":
                wynik = pascale_na_sekunde / jednostki_lepkości["lb/(in·s)"];
                document.getElementById(`number${i}_lepkości`).value = wynik;
                break;
        }
    }
}

async function przelicznik_ladunku(input) {
    const inputy_ladunku = document.querySelectorAll('#jednostki_ladunku input[type="number"]');   

    let jednostki_ladunku = {
        "C": 1,
        "mC": 0.001,
        "µC": 0.000001,
        "nC": 0.000000001,
        "pC": 0.000000000001,
        "ah": 3600,
        "mAh": 3.6
    };

    const numer_id = input.id.match(/\d+/)[0];
    const jednostka_pobrana = document.getElementById(`jednostka${numer_id}_ladunek`);
    const wartosc = parseFloat(input.value);

    if (isNaN(wartosc)) return;

    let kulomby;
    switch (jednostka_pobrana.value) {
        case "C":
            kulomby = wartosc * jednostki_ladunku["C"];
            break; 
        case "mC":
            kulomby = wartosc * jednostki_ladunku["mC"];
            break;
        case "µC":
            kulomby = wartosc * jednostki_ladunku["µC"];
            break;
        case "nC":
            kulomby = wartosc * jednostki_ladunku["nC"];
            break;
        case "pC":
            kulomby = wartosc * jednostki_ladunku["pC"];
            break;
        case "ah":
            kulomby = wartosc * jednostki_ladunku["ah"];
            break;
        case "mAh":
            kulomby = wartosc * jednostki_ladunku["mAh"];
            break;
    }

    for (let i = 1; i <= inputy_ladunku.length; i++) {
        const jednostka_zmiana = document.getElementById(`jednostka${i}_ladunek`);
        let wynik = 0;
        switch (jednostka_zmiana.value) {
            case "C":
                wynik = kulomby / jednostki_ladunku["C"];
                document.getElementById(`number${i}_ladunek`).value = wynik;
                break;
            case "mC":
                wynik = kulomby / jednostki_ladunku["mC"];
                document.getElementById(`number${i}_ladunek`).value = wynik;
                break;
            case "µC":
                wynik = kulomby / jednostki_ladunku["µC"];
                document.getElementById(`number${i}_ladunek`).value = wynik;
                break;
            case "nC":
                wynik = kulomby / jednostki_ladunku["nC"];
                document.getElementById(`number${i}_ladunek`).value = wynik;
                break;
            case "pC":
                wynik = kulomby / jednostki_ladunku["pC"];
                document.getElementById(`number${i}_ladunek`).value = wynik;
                break;
            case "ah":
                wynik = kulomby / jednostki_ladunku["ah"];
                document.getElementById(`number${i}_ladunek`).value = wynik;
                break;
            case "mAh":
                wynik = kulomby / jednostki_ladunku["mAh"];
                document.getElementById(`number${i}_ladunek`).value = wynik;
                break;
        }
    }
}

document.addEventListener("input", function(e){

    if(!e.target.matches("input[type='number']"))
        return;

    const przelicznik = e.target.closest(".przelicznik");

    switch(przelicznik.id)
    {
        case "przelicznik_dlugosci":
            przelicznik_dlugosci(e.target);
            break;

        case "przelicznik_powierzchni":
            przelicznik_powierzchni(e.target);
            break;
        
        case "przelicznik_objetosci":
            przelicznik_objetosci(e.target);
            break;

        case "przelicznik_wagi":
            przelicznik_masy(e.target);
            break;

        case "przelicznik_temperatury":
            przelicznik_temperatury(e.target);
            break;

        case "przelicznik_czasu":
            przelicznik_czasu(e.target);
            break;

        case "przelicznik_prędkości":
            przelicznik_predkosci(e.target);
            break;

        case "przelicznik_cisnienia":
            przelicznik_cisnienia(e.target);
            break;

        case "przelicznik_energii":
            przelicznik_energii(e.target);
            break;

        case "przelicznik_mocy":
            przelicznik_mocy(e.target);
            break;

        case "przelicznik_sily":
            przelicznik_sily(e.target);
            break;

        case "przelicznik_przyśpieszenia":
            przelicznik_przyspieszenia(e.target);
            break; 
            
        case "przelicznik_danych":
            przelicznik_danych(e.target);
            break;

        case "przelicznik_gęstości":
            przelicznik_gestosci(e.target);
            break;

        case "przelicznik_częstotliwości":
            przelicznik_czestotliwosci(e.target);
            break;

        case "przelicznik_napięcia":
            przelicznik_napiecia(e.target);
            break;

        case "przelicznik_natężenia":
            przelicznik_natezenia(e.target);
            break;
        case "przelicznik_kat":
            przelicznik_kat(e.target);
            break;
        case "przelicznik_momentu":
            przelicznik_momentu(e.target);
            break;

        case "przelicznik_rezystancji":
            przelicznik_rezystancji(e.target);
            break;
        case "przelicznik_lepkości":
            przelicznik_lepkości(e.target);
            break;
        case "przelicznik_ladunku":
            przelicznik_ladunku(e.target);
            break;
    }




});

document.addEventListener("change", function(e){

    if(!e.target.matches("select[id^='jednostka']"))
        return;

    const dopasowanie = e.target.id.match(/^jednostka(\d+)_(.+)$/);

    if(!dopasowanie)
        return;

    const numer = dopasowanie[1];
    const typ = dopasowanie[2];
    const jednostka = e.target.value;

    fetch(`index.php?akcja=zapisz_jednostke&typ=${encodeURIComponent(typ)}&numer=${numer}&jednostka=${encodeURIComponent(jednostka)}`);

});