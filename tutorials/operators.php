<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <h1>PHP Arithmetic Operator</h1>
    + Addition <?php echo 5 + 5; ?><br>
    - Subtraction <?php echo 5 - 5; ?><br>
    * Multiplication <?php echo 5 * 5; ?><br>
    / Division <?php echo 5 / 5; ?><br>
    % Modulus <?php echo 5 % 5; ?><br>
    ** Exponentiation <?php echo 5 ** 5; ?><br>

    <h1>PHP Assignment Operator</h1>
    = <?php $x = 5; echo $x; ?><br>
    += <?php $x = 5; $x+=5; echo $x; ?><br>
    -= <?php $x = 5; $x-=5; echo $x; ?><br>
    *= <?php $x = 5; $x*=5; echo $x; ?><br>
    /= <?php $x = 5; $x/=5; echo $x; ?><br>
    %= <?php $x = 5; $x%=5; echo $x; ?><br>

    <h1>PHP Comparison Operator</h1>
    == <?php echo 5 == 5; ?><br>
    === <?php echo 5 === 5; ?><br>
    != <?php echo 5 != 6; ?><br>
    <> <?php echo 5 <> 6; ?><br>
    !== <?php echo 5 !== '5'; ?><br>
    > <?php echo 5 > 6; ?><br>
    < <?php echo 5 < 6; ?><br>
    >= <?php echo 5 >= 6; ?><br>
    <= <?php echo 5 <= 6; ?><br>
    <=> <?php echo 5 <=> 4; ?><br>

    <h1>PHP Increment / Decrement Operator</h1>
    ++$x <?php $x = 5; echo ++$x; ?><br>
    $x++ <?php $x = 5; echo $x++; ?><br>
    --$x <?php $x = 5; echo --$x; ?><br>
    $x-- <?php $x = 5; echo $x--; ?><br>

    <h1>PHP Logical Operator</h1>
    and <?php echo (5 == 5 and 6 == 6); ?><br>
    or <?php echo (5 == 5 or 6 == 6); ?><br>
    xor <?php echo (5 == 5 xor 6 == 6); ?><br>
    && <?php echo (5 == 5 && 6 == 6); ?><br>
    || <?php echo (5 == 5 || 6 == 6); ?><br>
    ! <?php echo !(5 == 5); ?><br>

    <h1>PHP String Operator</h1>
    . <?php echo 'Hello '.'World'; ?><br>
    .= <?php $x = 'Hello '; $x .= 'World'; echo $x; ?><br>

    <h1>PHP Array Operator</h1>
    + <?php print_r(['a', 'b', 'c'] + ['d', 'e', 'f']); 
    ?><br>
    == <?php echo ['a', 'b', 'c'] == ['a', 'b', 'c']; ?><br>
    === <?php echo ['a', 'b', 'c'] === ['a', 'b', 'c']; ?><br>
    != <?php echo ['a', 'b', 'c'] != ['a', 'b', 'c']; ?><br>
    <> <?php echo ['a', 'b', 'c'] <> ['a', 'b', 'c']; ?><br>
    !== <?php echo [1, 'b', 'c'] !== ['1', 'b', 'c']; ?><br>

    <h1>PHP Conditional Assignment Operator</h1>
    ?: <?php echo 5 == 5 ? 'Yes' : 'No'; ?><br>
    ?? <?php echo $x ?? 'No'; ?><br>
</body>
</html>