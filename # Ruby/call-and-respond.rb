# << 

# You can always use plain old + or << to add a variable value into a string:

drink = "espresso"

"I love " + drink
# ==> I love espresso

"I love " << drink
# ==> I love espresso


# But if you want to do it for non-string values, you have to use .to_s to make it a string

age = 26
"I am " + age.to_s + " years old."
# ==> "I am 26 years old."
"I am " << age.to_s << " years old."
# ==> "I am 26 years old."