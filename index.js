const _0x2f65 = [
  "instance",
  "93703gBAUAn",
  "442816lLbold",
  "instantiate",
  "1ZFMVDM",
  "381193zsgNYQ",
  "check_flag",
  "result",
  "length",
  "48829pZIrMh",
  "648920pjyJsd",
  "copy_char",
  "21760lQoqpJ",
  "arrayBuffer",
  "1zBwHgR",
  "innerHTML",
  "615706OhnLTV",
  "Correct!",
  "getElementById",
  "./ZoRd23o0wd",
  "charCodeAt",
];
const _0x1125 = function (_0xe99bac, _0x38edc1) {
  _0xe99bac = _0xe99bac - 0xac;
  let _0x2f653e = _0x2f65[_0xe99bac];
  return _0x2f653e;
};
(function (_0x4bee5a, _0x2f153e) {
  const _0x48cd05 = _0x1125;
  while (!![]) {
    try {
      const _0x1ca14e =
        parseInt(_0x48cd05(0xb7)) +
        parseInt(_0x48cd05(0xb0)) +
        -parseInt(_0x48cd05(0xc0)) * parseInt(_0x48cd05(0xbd)) +
        -parseInt(_0x48cd05(0xac)) +
        -parseInt(_0x48cd05(0xb3)) +
        parseInt(_0x48cd05(0xb5)) * parseInt(_0x48cd05(0xb1)) +
        -parseInt(_0x48cd05(0xbe));
      if (_0x1ca14e === _0x2f153e) break;
      else _0x4bee5a["push"](_0x4bee5a["shift"]());
    } catch (_0x39e004) {
      _0x4bee5a["push"](_0x4bee5a["shift"]());
    }
  }
})(_0x2f65, 0x5b4df);
let exports;
(async () => {
  const _0x2ff3c6 = _0x1125;
  let _0x5a83eb = await fetch(_0x2ff3c6(0xba)),
    _0x304d04 = await WebAssembly[_0x2ff3c6(0xbf)](
      await _0x5a83eb[_0x2ff3c6(0xb4)]()
    ),
    _0x5835e7 = _0x304d04[_0x2ff3c6(0xbc)];
  exports = _0x5835e7["exports"];
})();
function onButtonPress() {
  const _0x2579ee = _0x1125;
  let _0x39e007 = document[_0x2579ee(0xb9)]("input")["value"];
  for (
    let _0x45a858 = 0x0;
    _0x45a858 < _0x39e007[_0x2579ee(0xaf)];
    _0x45a858++
  ) {
    exports[_0x2579ee(0xb2)](_0x39e007[_0x2579ee(0xbb)](_0x45a858), _0x45a858);
  }
  exports[_0x2579ee(0xb2)](0x0, _0x39e007[_0x2579ee(0xaf)]),
    exports[_0x2579ee(0xad)]() == 0x1
      ? (document[_0x2579ee(0xb9)](_0x2579ee(0xae))[_0x2579ee(0xb6)] =
          _0x2579ee(0xb8))
      : (document[_0x2579ee(0xb9)](_0x2579ee(0xae))["innerHTML"] =
          "Incorrect!");
}
