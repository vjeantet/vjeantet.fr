---
title: "The eye is a sediment of the hand."
slug: "the-eye-is-a-sediment-of-the-hand"
date: 2026-07-20T10:00:00+02:00
draft: false
tags: ["GenAI", "DevSecOps", "skills", "AI"]
---

This week I read several papers on the changing nature of software. One sentence stuck with me:

> "Did I write the right line?" becomes "did I check what the machine produced?"

Strikingly accurate: talent is shifting from **the hand that writes** toward **the eye that reviews**.

I agree — with one reservation:

The eye is not a standalone skill. It is a sediment of the hand: experience, or craft.

## What builds the eye

You don't spot suspicious behaviour thanks to a checklist. You spot it because something doesn't smell right — and you only know that smell after having made enough mistakes yourself and breathed it in.

The senior engineer who, during review, stops on a function without yet knowing why has paid for that reflex: ten years of bugs, of rollbacks at 11pm, of "ah yes, it's that again". This learning didn't happen on the noble tasks. It happened on the thankless ones: the repetitive CRUD, the schema migration, the parsing of the malformed file, the test that fails one time in thirty.

Exactly the ones we delegate first. Not out of calculation, but because they are the easiest to delegate.

This is the nano-segmentation of the skills problem: what is cheapest to take away is also what was building the most experience.

## The paradox is not new

Back in the 1980s, writing about industrialisation and its control rooms, people already described similar paradoxical situations:

- routine tasks are automated, leaving the operator with supervision and taking back control when an incident occurs;
- yet supervision and taking back control are exactly what demand the most experience... and automation has removed the means to acquire it.

Aviation has lived with this problem for forty years. Its answer was not to give up the autopilot. It was the simulator, mandatory continuous training, enforced manual flying, a culture of incident analysis.

In other words: artificially reconstituting the conditions of experience, once production no longer provides them.

We have nothing comparable for software engineering. We do have control frameworks, but that is not the same thing: a framework describes what must be checked, it does not manufacture the person capable of seeing what isn't in it.

## The real risk is not the supervisor who tires

It lies elsewhere: the pool of supervisors that no longer replenishes itself.

We know how to recruit orchestrators today because they were craftspeople yesterday. The next generation won't have had that yesterday. A junior who starts in 2026 with an agent open at all times will produce more than a 2015 junior and accumulate less of what, at 35, makes for **discernment**.

Someone will object that sorting through generated diffs — accepting some, rejecting others — also trains the eye. No doubt. But reviewing without having produced is like learning to recognise a smell from a photo of a dish: you name what you've already seen fail, you don't sense what you've never cooked yourself.

And that school is closing too. As supervision replaces reading, we no longer read the line: we validate a batch, a green status, a summary. The last training ground, already meagre, is closing up. Soon all that remains is the gesture that judges without ever having touched.

This is not a trial of the junior nor of the tool. It's a question of setup: by what path does one become the supervisor that agentic engineering needs, if the path itself has been automated?
 \
 \
The question to ask soon won't be "can AI code?". It will be: **which questions can we no longer think to ask, for lack of having kept the practice that made them thinkable?**


## What it means, concretely

No general solution. A few organisational choices that seem to me to hold up:

- **Keep deliberately manual zones.** Not out of nostalgia: to keep producing judgement. They must be decided, budgeted, and defended in committee — otherwise they vanish at the first velocity trade-off.
- **Make the incident a training material**, not just a post-mortem to file away. It is the trade's simulator.
- **Separate review from generation.** Whoever prompted (and/or generated) is not best placed to doubt the result; they have already accepted the intent.
- **Accept that upskilling costs more than before.** It is no longer a free by-product of production. It will have to be a budget line!

None of this will come from the models, nor from the frameworks. These are organisational decisions, made by people willing to lose a little throughput now in order to have an eye ten years from now.

Talent is shifting, they say. It shifts, yes — provided we leave it somewhere to train.

---

*PS: the same question applies to Cybersecurity! Auditing generated behaviour requires having written, broken and fixed things yourself. Compliance will demand traceability; it will not manufacture the people able to read it.*


