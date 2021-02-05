<?php


Get Next Letter

If Letter == C || Letter == L || Letter == A || Letter == S
    A .= Letter
    if Letter == "CLASS"
        Get Next Letter
            if Letter == "="
                Get Next Letter
                if Letter == "'" || Letter == '"'
                    Net Next Letter
                if Letter == Space
                    While Letter == Space
                        Get Next Letter
                    End While
                While Letter != Space
                    A = Letter
                    Get Next Letter
                End While

                Go to CSS --------------

                LetterA = Split(A)
                LetterC = Split(CSS)
                Get Letter from CSS
            Foreach LetterC
                Foreach LetterA
                    If LetterC == LetterA
                        LetterD .= LetterC
                End Foreach

                If LetterD == A
                    LetterA == Null
                    Code .= LetterC
                    if LetterC == "}"
                        A = null
                        Save CSS Block
                        Go To HTML ---------------

            End Foreach