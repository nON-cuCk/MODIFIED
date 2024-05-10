

<style>
.container {
    width: 60%; /* You can adjust the width as needed */
    height: 400px; /* Example height for the container */
    display: flex;
    flex-direction: row;
}

.half {
    flex: 1; /* Each half takes up equal space */
    border: 1px solid black; /* Just for visualization */
}
.first-half th{
    background-color: black; /* Set the background color of the first half to green */
    display: flex;
    flex-direction: row;
    background: none;
    color: blue;
    font-size: 15px;
    line-height: 1.5; 
    padding: 5px 10px; /* Adjust the padding to increase or decrease vertical spacing */
    border-right: 25px;
}



.second-half {
        background-color: black; /* Set the background color of the first half to green */
    display: flex;
    flex-direction: row;
    background: none;
    color: blue;
    font-size: 15px;
    line-height: 1.5; 
    padding: 5px 10px; /* Adjust the padding to increase or decrease vertical spacing */
    border-right: 25px;
}


</style>






<div class="container">
    <div class="half first-half">
        <table>
        <tr>
            <th>Type</th>
            <th>Firename</th>
            <th>Serial Number</th>
            <th>Building</th>
            <th>Floor</th>
            <th>Room</th>
            <th>Installtion date</th>
            <th>expiration date</th>
            <th>Status</th>
        </tr>
        </table>
    </div>
    <div class="half second-half"></div>
</div>































<!-- <style>


</style>

<div class="container">
<h1>
    FIRE EXTINGUISHER INFO
</h1>
    <table border="10px">

        <tr>
            <th>Type</th>
            <th>Firename</th>
            <th>Serial Number</th>
            <th>Building</th>
            <th>Floor</th>
            <th>Room</th>
            <th>Installtion date</th>
            <th>expiration date</th>
            <th>Status</th>
        </tr>
        @foreach($fire_list as $fire_fetch_list)
        <tr>
            <td>{{ $fire_fetch_list->fireex->description }}</td>
            <td>{{ $fire_fetch_list['firename']}}</td>
            <td>{{ $fire_fetch_list['serial_number']}}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td>{{ $fire_fetch_list['status']}}</td>
        </tr>
        @endforeach


    </table>
</div> -->
