function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum;
}

// Example usage:
const numbers = [1, 2, 3, 4, 5];
const total = calculateSum(numbers);
console.log(total); // Output: 15