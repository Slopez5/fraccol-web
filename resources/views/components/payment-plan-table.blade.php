<div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>precio m<sup>2</sup></th>
                <th>Enganche</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paymentPlans as $index => $paymentPlan)
                <tr>
                    <td>{{ $paymentPlan['id'] }}</td>
                    <td>{{ $paymentPlan['name'] }}</td>
                    <td>{{ $paymentPlan['pivot']['price_per_sqm'] }}</td>
                    <td>{{ $paymentPlan['pivot']['down_payment'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
