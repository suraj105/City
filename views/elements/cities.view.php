<?php if(!empty($cities)): ?>
    <table aria-describedby="city-stats">
        <caption id="city-stats">Statistics of Cities in Germany</caption>
        <thead>
            <tr>
                <th scope="col">Name of the city</th>
                <th scope="col">Population</th>
                <th scope="col">Area (sq km)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cities AS $city): ?>
                <tr>
                    <td><?php echo e($city['title']); ?></td>
                    <td><?php echo e(number_format($city['population'])); ?></td>
                    <td><?php echo e(number_format($city['area'], 2)); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
