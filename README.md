# zynko-oracle · `php-armstrong-numbers-isarmstrongnumber-conformance-oracle`

**A deterministic, re-checkable conformance oracle for `armstrong-numbers` (php).**

## Proven
Measured on the canonical Exercism corpus — **9 input/output pairs, 2 distinct outputs** — produced by *running* the reference in a sealed sandbox, not asserted.

## Scope (declared)
The corpus is the canonical Exercism test data for `armstrong-numbers`. Inputs outside that set are **not covered**; this oracle decides agreement on the published corpus only and makes no claim of general correctness.

## Provenance
Reference: the Exercism reference solution for `armstrong-numbers` (php; MIT, Exercism), body unchanged. Proven by the exercism testsuite (pin=9f84a26c46a2e317), re-executed by harvest in a sealed sandbox (unshare -rn) before this bundle was generated.

## License
Apache-2.0 for the scaffolding; the reference body retains its upstream MIT (Exercism) license.
