# define a function called sum 
def sum(number_one,number_two):
    # convert the 2 numbers to integers
    
    number_one_int = convert_integer(number_one)
    number_one_two = convert_integer(number_two)

    result = number_one_int + number_one_two

    # print the result
    print(result)

    return result

# define another functon
def convert_integer(number_string):

    convert_integer = int(number_string)

    return convert_integer

# call the function
sum("10","2")