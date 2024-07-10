<!-- //blade directive for switch statement. -->
@switch($status)
    @case('Pending')
        <p>Your order is Pending!</p>
    @break

    @case('Approved')
        <p>Your order has been approved!</p>
    @break

    @case('Cancelled')
        <p>Your order has been cancelled!</p>
    @break

    @case('Rejected')
        <p>Your order has been rejected!</p>
    @break

    @default
        <p>No status. Place your order.</p>
@endswitch