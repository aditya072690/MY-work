def pythagorean_triplets(limits) :
   c, m = 0, 2
   while c < limits :
   for n in range(1, m) :
      a = m * m - n * n
      b = 2 * m * n
      c = m * m + n * n
      if c > limits :
         break
      print(a, b, c)
   m = m + 1
upper_limit = 15
print("The upper limit is :")
print(upper_limit)
print("The Pythagorean triplets are :")
pythagorean_triplets(upper_limit)
