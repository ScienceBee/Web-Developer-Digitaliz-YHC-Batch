<?php
$conn = mysqli_connect('localhost', 'root', '13052003', 'seleksi');
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="bg-[#dbeafe] w-full h-[100vh] flex flex-col items-center">
        <h1 class="font-bold text-xl mt-8">Proeject Monitoring</h1>
        <div class="w-[98%] bg-white mt-5 rounded-lg">
            <!-- Table -->

            <div class="relative overflow-x-auto shadow-md w-full mx-auto p-4">
                <table class="w-full text-sm text-left text-gray-500 mt-3">
                    <thead class="text-xs text-gray-700 uppercase bg-[#f9fafb] ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Project name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Client
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Project Leader
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Start Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                End Date
                            </th>
                            <th scope="col" class="px-6 py-3 w-[200px]">
                                Progress
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM proyek";
                        if ($result = mysqli_query($conn, $sql)) {
                            while ($data = mysqli_fetch_row($result)) {
                                echo ' <tr class="bg-[#ffffff]">
                    <td scope="row" class="font-semibold px-6 py-4">
                    ' . $data[1] . '
                    </td>
                    <td class="font-semibold px-6 py-4">
                    ' . $data[2] . '
                    </td>
                    <td class="font-semibold px-6 py-4">
                    <div class="flex items-center">
                        <img class="rounded-full w-[35px] h-[35px]" src=" ' . $data[5] . '" alt="">
                        <div class="flex flex-col pl-3">
                            <p class="font-bold text-md text-black"> ' . $data[3] . '</p>
                            <p> ' . $data[4] . '</p>
                         </div>
                     </div>
                    </td>
                    <td class="font-semibold px-6 py-4">
                        ' . date("d M Y", strtotime($data[6])) . '
                    </td>
                    <td class="font-semibold px-6 py-4">
                    ' . date("d M Y", strtotime($data[7])) . '
                    </td>
                    <td class="font-semibold px-6 py-4">
                        <div class="flex justify-between mb-1 flex-row items-center">
                        <div class="w-full bg-blue-200 rounded-full h-2.5">';
                                if ($data[8] >= 100) {
                                    echo '<div class="bg-green-600 h-2.5 rounded-full" style="width: ' . $data[8] . '%"></div>';
                                } else {
                                    echo '<div class="bg-blue-600 h-2.5 rounded-full" style="width: ' . $data[8] . '%"></div>';
                                }
                                echo '
                        </div>
                        <span class="text-sm font-medium text-black ml-2">' . $data[8] . '%</span>
                        </div>
                    </td>
                    <td class="font-semibold px-6 py-4">
                        <a href="hapus.php?no=' . $data[0] . '" class="pr-1 font-medium  hover:underline"><i class="fa-solid fa-trash"></i></a>
                        <a href="edit.php?no=' . $data[0] . '" class="font-medium  hover:underline"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                </tr>';
                            }
                        }
                        ?>
                        </table>
                        <!-- End Table -->
            </div>
            <div class="p-3">
                <button class="p-2 bg-orange-300 rounded-md"><a href="input.php">INPUT DATA</button>
            </div>
        </div>


</html>