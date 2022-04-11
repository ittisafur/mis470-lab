<?php include './partials/header.php';
     $students = new Students();
?>

        <div class="grid grid-cols-1 gap-5"> 
            <div> 
                <h1 class="text-center font-semibold text-2xl my-4 uppercase text-gray-600 tracking-tight">Teachers</h1>
                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Age
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Department
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                         <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    Shamim Talukdar
                                </th>
                                <td class="px-6 py-4">
                                    38
                                </td>
                                <td class="px-6 py-4">
                                    shamim.talukdar@northsouth.edu
                                </td>
                                <td class="px-6 py-4">
                                    Management
                                </td>
                                <td class="px-6 py-4 flex gap-x-4 justify-start items-center">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div> 
                <?php include 'viewStudents.php' ?>
            </div>
        
        </div>

<?php include './partials/footer.php';
