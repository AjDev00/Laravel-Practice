{{-- loop through all customer data and print them one after the other --}}
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
    </tr>
    @foreach ($customer_data as $one_customer)
        <tr>
            <td>
                {{ $loop->iteration }}
            </td>
            <td>
                {{ $one_customer->customers_name }}
            </td>
            <td>
                {{ $one_customer->customers_email }}
            </td>
            <td>
                {{ $one_customer->customers_phone_number }}
            </td>
        </tr>
    @endforeach
</table>