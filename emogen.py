import string
import random

def string_generator(size=6, chars=string.ascii_uppercase + string.digits):
    return ''.join(random.choice(chars) for _ in range(size))

with open('prefix.txt') as f:
    prefixes = f.readlines()

with open('nouns.txt') as f:
    nouns = f.readlines()

with open('join.txt') as f:
    joiners = f.readlines()

with open('time.txt') as f:
    timemeasures = f.readlines()
