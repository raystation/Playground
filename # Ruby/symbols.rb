menagerie = { :foxes => 2,
  :giraffe => 1,
  :weezards => 17,
  :elves => 1,
  :canaries => 4,
  :ham => 1
}

# "string" == :string # false
# Above and beyond the different syntax, there's a key behavior of symbols that makes them different from strings: while there can be multiple different strings that all have the same value, there's only one copy of any particular symbol at a given time.


# converting strings to symbols
:sasquatch.to_s
# ==> "sasquatch"

"sasquatch".to_sym
# ==> :sasquatch

