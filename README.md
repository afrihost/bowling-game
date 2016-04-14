# Bowling Game Code Kata

- [Code Kata](#code-kata)
- [TDD](#tdd)
- [Bowling Game](#bowling-game)

<a name="code-kata"></a>
## Code Kata

> A code kata is an exercise in programming which helps a programmer hone their skills through practice and repetition.

https://en.wikipedia.org/wiki/Kata_(programming)

<a name="tdd"></a>
## TDD

> Test-driven development (TDD) is a software development process that relies on the repetition of a very short development cycle: first the developer writes an (initially failing) automated test case that defines a desired improvement or new function, then produces the minimum amount of code to pass that test, and finally refactors the new code to acceptable standards.

https://en.wikipedia.org/wiki/Test-driven_development

<a name="bowling-game"></a>
## Bowling Game

A game of tenpins bowling lasts ten frames, in each of which the bowler makes one or two attempts to knock down ten pins arranged in a triangle. If the bowler knocks down all ten pins on the first attempt (that's called a "strike"), he scores ten pins plus the number of pins knocked down on his next two rolls. If the bowler knocks down all ten pins after two attempts (that's called a "spare"), he scores ten pins plus the number of pins knocked down on his next roll. If the bowler fails to knock down all ten pins (that's called an "open frame"), he scores the number of pins he knocked down. The scores accumulate through all ten frames. At the last frame, if necessary, the pins are reset for one or two additional rolls to count the final bonus.

- Must be able to score a gutter game, score should be 0
- Must be able to score 20 rolls of 1 pin, score should be 20
- Must be able to score 1 spare, 1 roll of 3 pins and 17 rolls of 0 pins, score should be 16
- Must be able to score 1 strike, 1 roll of 3 pins, 1 roll of 4 pins and 16 rolls of 0 pins, score should be 24
- Must be able to score 10 strikes, score should be 300
