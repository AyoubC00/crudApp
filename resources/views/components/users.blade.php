@vite("resources/js/users.js")
<table class="w-full text-sm">
    <thead class="tracking-wide">
        <tr class="border-b [&>th]:text-start [&>th]:pb-4 last:[&>th]:text-end [&>th]:px-6">
            <th>User</th>
            <th>ID</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody id="usersTable"
        class="[&>tr]:border-b [&>tr:hover]:bg-slate-50 cursor-pointer [&>tr>td]:py-2 [&>tr>td]:px-6 [&>tr>td]:font-light last:[&>tr>td]:text-end">
        <tr data-user-id="1">
            <td>
                <img src="https://unsplash.it/300/400" alt="Avatar"
                    class="h-10 w-10 rounded-full object-cover inline me-4">
                <span class="font-normal">John Doe</span>
            </td>
            <td>ID</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Address</td>
        </tr>
        <tr data-user-id="2">
            <td>
                <img src="https://unsplash.it/300/400" alt="Avatar"
                    class="h-10 w-10 rounded-full object-cover inline me-4">
                <span class="font-normal">John Doe</span>
            </td>
            <td>ID</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Address</td>
        </tr>
    </tbody>
</table>