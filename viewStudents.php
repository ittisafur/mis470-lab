
                <h1 class="text-center font-semibold text-2xl my-4 uppercase text-gray-600 tracking-tight">Students</h1>
                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                    Department
                            </th>
                            <th scope="col" class="px-6 py-3 ">
                                    Actions
                            <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                         <tbody>
                    
                                <?php foreach ($students->getStudentsAll(PDO::FETCH_OBJ) as $value) : ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        <?php echo $value->name; ?>
                                    </th>

                                    <td class="px-6 py-4">
                                        <?php echo $value->nsuid; ?>
                                    </td>

                                    <td class="px-6 py-4">
                                        <?php echo $value->email; ?>
                                    </td>

                                    <td class="px-6 py-4">
                                        <?php echo $value->department; ?>
                                    </td>

                                    <td class="px-6 py-4">
                                        <?php echo $value->email; ?>
                                    </td>

                                    <td class="px-6 py-4 text-right flex justify-start items-center gap-x-4">
                                        <a href="deleteStudents.php?id=<?= $value->id; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                        <a href="editStudents.php?id=<?= $value->id; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>

                                </tr>
                                <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
