//Solution 1: Check if the index exists before accessing
function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    if (isset(numbers[$i])) {
      sum += numbers[$i];
    }
  }
  return sum;
}

//Solution 2: Using array_key_exists()
function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    if (array_key_exists($i, numbers)) {
      sum += numbers[$i];
    }
  }
  return sum;
}

// Solution 3: Using isset() within a loop and providing default values
function calculateSum(numbers) {
  let sum = 0;
  foreach ($numbers as $number) {
      sum += isset($number) ? $number : 0; // assigns 0 if index doesn't exist
  }
  return sum;
}

// Example usage:
const numbers = [1, 2, 3, 4, 5];
const total = calculateSum(numbers);
console.log(total); // Output: 15