@php
    $user_data = isset($_POST['usersChartData']) ? $_POST['usersChartData'] : null;
    print json_encode($result ?? '');
@endphp
